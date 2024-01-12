<?php

namespace App\View\Components\Media;

use AnisAronno\MediaGallery\Helpers\CacheKey;
use AnisAronno\MediaGallery\Models\Media as MediaGallery;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\View\Component;

class Media extends Component
{
    public function __construct(public Request $request)
    {
        //
    }

    public function render(): View|Closure|string
    {
        $queryParams = $this->request->query();
        ksort($queryParams);
        $queryString          = http_build_query($queryParams);
        $mediaGalleryCacheKey = CacheKey::getMediaGalleryCacheKey();
        $key                  = $mediaGalleryCacheKey.config('media.view_all_media_anyone').md5($queryString);
        $cacheTTL             = Config::get('media.cache_expiry_time', 1440);

        $medias               = Cache::remember(
            $key,
            now()->addMinutes($cacheTTL),
            function ()
            {
                return MediaGallery::query()->with(['owner'])
                    ->when($this->request->has('search'), function ($query)
                    {
                        $query->where('title', 'LIKE', '%'.$this->request->input('search').'%');
                    })
                    ->when($this->request->has('directory'), function ($query)
                    {
                        $query->where('directory', $this->request->input('directory'));
                    })
                    ->when($this->request->has('owner_id') || ! config('media.view_all_media_anyone'), function ($query)
                    {
                        $query->where('owner_id', auth()->id());
                    })
                    ->when($this->request->has('startDate') && $this->request->has('endDate'), function ($query)
                    {
                        $query->whereBetween('created_at', [
                            new \DateTime($this->request->input('startDate')),
                            new \DateTime($this->request->input('endDate')),
                        ]);
                    })
                    ->orderBy($this->request->input('orderBy', 'id'), $this->request->input('order', 'desc'))
                    ->paginate(50)->withQueryString();
            }
        );

        Cache::put($mediaGalleryCacheKey, array_merge(Cache::get($mediaGalleryCacheKey, []), [$key]));

        return view('components.media.media', ['medias' => $medias]);
    }
}
