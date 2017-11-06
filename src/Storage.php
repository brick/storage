<?php

namespace Brick\Storage;

/**
 * Simple interface for storing, retrieving, and deleting objects.
 */
interface Storage
{
    /**
     * @param string $path
     * @param string $data
     *
     * @return void
     *
     * @throws Exception\StorageException If an unknown error occurs.
     */
    public function put(string $path, string $data) : void;

    /**
     * @param string $path
     *
     * @return string
     *
     * @throws Exception\NotFoundException If the path is not found.
     * @throws Exception\StorageException  If an unknown error occurs.
     */
    public function get(string $path) : string;

    /**
     * @param string $path
     *
     * @return bool
     */
    public function has(string $path) : bool;

    /**
     * @param string $path
     *
     * @return void
     *
     * @throws Exception\StorageException If an unknown error occurs.
     */
    public function delete(string $path) : void;
}
