<?php

namespace Brick\Storage;

/**
 * Simple interface for storing, retrieving, and deleting objects.
 */
interface Storage
{
    /**
     * Puts an object in the storage.
     *
     * If the object already exists, it is overwritten.
     *
     * @param string $path The object path.
     * @param string $data The object data.
     *
     * @return void
     *
     * @throws Exception\StorageException If an error occurs.
     */
    public function put(string $path, string $data) : void;

    /**
     * Retrieves an object from the storage.
     *
     * @param string $path The object path.
     *
     * @return string The object data.
     *
     * @throws Exception\NotFoundException If the path is not found.
     * @throws Exception\StorageException  If an error occurs.
     */
    public function get(string $path) : string;

    /**
     * Returns whether an object exists for the given path.
     *
     * @param string $path
     *
     * @return bool
     *
     * @throws Exception\StorageException If an error occurs.
     */
    public function has(string $path) : bool;

    /**
     * Deletes an object from the storage.
     *
     * @param string $path
     *
     * @return void
     *
     * @throws Exception\StorageException If an error occurs.
     */
    public function delete(string $path) : void;
}
