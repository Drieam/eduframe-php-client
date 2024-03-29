<?php

namespace Eduframe\Traits;

/**
 * Class Storable
 * @package Eduframe|Traits
 */
trait Storable
{
    use BaseTrait;

    /**
     * @return mixed
     * @throws \Eduframe\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function save() {
        if ( $this->exists() ) {
            return $this->update();
        } else {
            return $this->insert();
        }
    }

    /**
     * @return mixed
     * @throws \Eduframe\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function insert() {

        $result = $this->connection()->post($this->getEndpoint(), $this->json());

        return $this->selfFromResponse($result);
    }

    /**
     * @return mixed
     * @throws \Eduframe\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update() {

        $result = $this->connection()->patch($this->getEndpoint() . '/' . urlencode($this->id), $this->json());

        if ( $result === 200 ) {
            return true;
        }

        return $this->selfFromResponse($result);
    }
}
