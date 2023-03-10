<?php

namespace Qdequippe\Pappers\Api\Model;

class BodaccProcedureCollective extends Bodacc
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Famille de la procédure collective.
     *
     * @var string|null
     */
    protected $famille;
    /**
     * Nature de la procédure collective.
     *
     * @var string|null
     */
    protected $nature;
    /**
     * Complément sur le jugement de procédure collective.
     *
     * @var string|null
     */
    protected $complementJugement;

    /**
     * Famille de la procédure collective.
     */
    public function getFamille(): ?string
    {
        return $this->famille;
    }

    /**
     * Famille de la procédure collective.
     */
    public function setFamille(?string $famille): self
    {
        $this->initialized['famille'] = true;
        $this->famille = $famille;

        return $this;
    }

    /**
     * Nature de la procédure collective.
     */
    public function getNature(): ?string
    {
        return $this->nature;
    }

    /**
     * Nature de la procédure collective.
     */
    public function setNature(?string $nature): self
    {
        $this->initialized['nature'] = true;
        $this->nature = $nature;

        return $this;
    }

    /**
     * Complément sur le jugement de procédure collective.
     */
    public function getComplementJugement(): ?string
    {
        return $this->complementJugement;
    }

    /**
     * Complément sur le jugement de procédure collective.
     */
    public function setComplementJugement(?string $complementJugement): self
    {
        $this->initialized['complementJugement'] = true;
        $this->complementJugement = $complementJugement;

        return $this;
    }
}
