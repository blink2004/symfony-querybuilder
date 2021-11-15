<?php

namespace App\Entity;

use App\Repository\UserToAddressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserToAddressRepository::class)
 */
class UserToAddress
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=address::class)
     */
    private $address_id;

    /**
     * @ORM\ManyToMany(targetEntity=user::class)
     */
    private $user_id;

    public function __construct()
    {
        $this->address_id = new ArrayCollection();
        $this->user_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|address[]
     */
    public function getAddressId(): Collection
    {
        return $this->address_id;
    }

    public function addAddressId(address $addressId): self
    {
        if (!$this->address_id->contains($addressId)) {
            $this->address_id[] = $addressId;
        }

        return $this;
    }

    public function removeAddressId(address $addressId): self
    {
        $this->address_id->removeElement($addressId);

        return $this;
    }

    /**
     * @return Collection|user[]
     */
    public function getUserId(): Collection
    {
        return $this->user_id;
    }

    public function addUserId(user $userId): self
    {
        if (!$this->user_id->contains($userId)) {
            $this->user_id[] = $userId;
        }

        return $this;
    }

    public function removeUserId(user $userId): self
    {
        $this->user_id->removeElement($userId);

        return $this;
    }
}
