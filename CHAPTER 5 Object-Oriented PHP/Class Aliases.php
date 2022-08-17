<?php
if (extension_loaded('memcached')) {
    class_alias('Memcached', 'Cache');
} else {
    class_alias('InternalCacheProvider', 'Cache');
}
class Database
{
    // The cache class is aliased to either Memcached or the InternalCacheProvider
    public function __construct(Cache $cache) {}
}