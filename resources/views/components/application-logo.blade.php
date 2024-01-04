@use('AnisAronno\MediaHelper\Facades\Media')

<img src="{{ hasSettings('logo') ? Media::getURL(getSettings('logo')) : Media::getDefaultLogo() }}" alt="Logo" class="h-[50px]"/>
