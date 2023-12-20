<?php

namespace App\Helpers;

/**
 * Class of CacheKey
 */
class CacheKey
{
    /**
     * Summary of getRoleCacheKey
     * @return string
     */
    public static function getRoleCacheKey(): string
    {
        return 'role_';
    }

    /**
     * Summary of getUserCacheKey
     * @return string
     */
    public static function getUserCacheKey(): string
    {
        return 'user_';
    }

    /**
     * Summary of getOptionsCacheKey
     * @return string
     */
    public static function getOptionsCacheKey(): string
    {
        return 'settings_';
    }
    /**
     * Summary of getProductCacheKey
     * @return string
     */
    public static function getProductCacheKey(): string
    {
        return 'product_';
    }
    /**
     * Summary of getFeaturedProductCacheKey
     * @return string
     */
    public static function getFeaturedProductCacheKey(): string
    {
        return 'featured_product_';
    }
    
    
    /**
     * Summary of getCategoryCacheKey
     * @return string
     */
    public static function getCategoryCacheKey(): string
    {
        return 'category_';
    }

    /**
     * Summary of getFeaturedCategoryCacheKey
     * @return string
     */
    public static function getFeaturedCategoryCacheKey(): string
    {
        return 'featured_category_';
    }

    /**
     * Summary of getContactCacheKey
     * @return string
     */
    public static function getContactCacheKey(): string
    {
        return 'contact_';
    }
}
