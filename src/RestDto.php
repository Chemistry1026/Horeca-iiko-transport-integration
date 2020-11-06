<?php


namespace IikoTransport;

use JsonSerializable;

class RestDto implements JsonSerializable
{
    /**
     * @param mixed $data
     * @param bool $importAllProperties
     * @return $this|void
     */
    public function insertDataToClass($data, $importAllProperties = false)
    {
        if (!is_array($data)) return;

        foreach ($data as $key => $value) {
            if ($importAllProperties) {
                $this->$key = $value;
            } elseif (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }

        return $this;
    }

    /**
     * @param string $property
     * @param RestDto $dto
     * @param callable|null $dtoCallback
     * @return RestDto|void
     */
    public function setArrayToPropertyFromJson(string $property, self $dto, callable $dtoCallback = null)
    {
        if (!$this->$property) return;

        foreach ($this->$property as $key => $item) {
            $dto = new $dto;
            $this->$property[$key] = $dto->insertDataToClass($item);

            if (is_callable($dtoCallback)) {
                $dtoCallback($dto);
            }
        }

        return $this;
    }

    public function setPropertyToClassPropertyFromJson(string $property, self $dto)
    {
        if (!$this->$property) return null;
        return $dto->insertDataToClass($this->$property);
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this);
    }

    /**
     * @return mixed
     */
    public function toArray()
    {
        return json_decode($this->toJson(), true);
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
