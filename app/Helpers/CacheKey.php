<?php

namespace App\Helpers;

/**
 * Class of CacheKey
 */
class CacheKey
{
    /**
     * Summary of getRoleCacheKey
     */
    public static function getRoleCacheKey(): string
    {
        return 'role_';
    }

    /**
     * Summary of getUserCacheKey
     */
    public static function getUserCacheKey(): string
    {
        return 'user_';
    }

    /**
     * Summary of getOptionsCacheKey
     */
    public static function getOptionsCacheKey(): string
    {
        return 'settings_';
    }

    /**
     * Summary of getProductCacheKey
     */
    public static function getProductCacheKey(): string
    {
        return 'product_';
    }

    /**
     * Summary of getFeaturedProductCacheKey
     */
    public static function getFeaturedProductCacheKey(): string
    {
        return 'featured_product_';
    }

    /**
     * Summary of getCategoryCacheKey
     */
    public static function getCategoryCacheKey(): string
    {
        return 'category_';
    }

    /**
     * Summary of getFeaturedCategoryCacheKey
     */
    public static function getFeaturedCategoryCacheKey(): string
    {
        return 'featured_category_';
    }

    /**
     * Summary of getContactCacheKey
     */
    public static function getContactCacheKey(): string
    {
        return 'contact_';
    }
}
