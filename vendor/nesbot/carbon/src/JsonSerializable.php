<?php

<<<<<<< HEAD
if (!interface_exists('JsonSerializable')) {
    interface JsonSerializable
    {
        /**
         * Specify data which should be serialized to JSON.
         *
         * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
         *
         * @return mixed data which can be serialized by <b>json_encode</b>,
         *               which is a value of any type other than a resource.
         *
         * @since 5.4.0
         */
        public function jsonSerialize();
    }
=======
interface JsonSerializable
{
    /**
     * Specify data which should be serialized to JSON.
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed data which can be serialized by <b>json_encode</b>,
     *               which is a value of any type other than a resource.
     *
     * @since 5.4.0
     */
    public function jsonSerialize();
>>>>>>> 5df037cc04d5db9f621306f5c9c55a743886da7b
}
