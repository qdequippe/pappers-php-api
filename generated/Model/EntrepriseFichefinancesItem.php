<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichefinancesItem extends \ArrayObject
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
     * Année de cloture d'exercice.
     *
     * @var int|null
     */
    protected $annee;
    /**
     * Date de cloture de l'exercice des finances de l'entreprise.
     *
     * @var \DateTime|null
     */
    protected $dateDeClotureExercice;
    /**
     * Durée de l'exercice de l'entreprise.".
     *
     * @var int|null
     */
    protected $dureeExercice;
    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @var int|null
     */
    protected $chiffreAffaires;
    /**
     * Résultat de l'entreprise.
     *
     * @var int|null
     */
    protected $resultat;
    /**
     * Effectif de l'entreprise.
     *
     * @var int|null
     */
    protected $effectif;
    /**
     * Marge brute de l'entreprise.
     *
     * @var int|null
     */
    protected $margeBrute;
    /**
     * Excédent brut d'exploitation (EBITDA) de l'entreprise.
     *
     * @var int|null
     */
    protected $excedentBrutExploitation;
    /**
     * Résultat d'exploitation (EBIT) de l'entreprise.
     *
     * @var int|null
     */
    protected $resultatExploitation;
    /**
     * Taux de croissance du chiffre d'affaires (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $tauxCroissanceChiffreAffaires;
    /**
     * Taux de marge brute (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $tauxMargeBrute;
    /**
     * Taux de marge d'EBITDA (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $tauxMargeEBITDA;
    /**
     * Taux de marge opérationnelle (EBIT) (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $tauxMargeOperationnelle;
    /**
     * BFR (Besoin en fonds de roulement) de l'entreprise.
     *
     * @var int|null
     */
    protected $bFR;
    /**
     * BFR exploitation de l'entreprise.
     *
     * @var int|null
     */
    protected $bFRExploitation;
    /**
     * BFR hors exploitation de l'entreprise.
     *
     * @var int|null
     */
    protected $bFRHorsExploitation;
    /**
     * BFR (en jours de CA) de l'entreprise.
     *
     * @var int|null
     */
    protected $bFRJoursCA;
    /**
     * BFR exploitation (en jours de CA) de l'entreprise.
     *
     * @var int|null
     */
    protected $bFRExploitationJoursCA;
    /**
     * BFR hors exploitation (en jours de CA) de l'entreprise.
     *
     * @var int|null
     */
    protected $bFRHorsExploitationJoursCA;
    /**
     * Délai de paiement clients (en jours) de l'entreprise.
     *
     * @var int|null
     */
    protected $delaiPaiementClientsJours;
    /**
     * Délai de paiement fournisseurs (en jours) de l'entreprise.
     *
     * @var int|null
     */
    protected $delaiPaiementFournisseursJours;
    /**
     * Ratio des stocks / CA (en jours) de l'entreprise.
     *
     * @var int|null
     */
    protected $ratioStockCAJours;
    /**
     * Capacité d'autofinancement de l'entreprise.
     *
     * @var int|null
     */
    protected $capaciteAutofinancement;
    /**
     * Capacité d'autofinancement / CA (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $capaciteAutofinancementCA;
    /**
     * Fonds de roulement net global de l'entreprise.
     *
     * @var int|null
     */
    protected $fondsRoulementNetGlobal;
    /**
     * Couverture du BFR de l'entreprise.
     *
     * @var int|null
     */
    protected $couvertureBFR;
    /**
     * Trésorerie de l'entreprise.
     *
     * @var int|null
     */
    protected $tresorerie;
    /**
     * Dettes financières de l'entreprise.
     *
     * @var int|null
     */
    protected $dettesFinancieres;
    /**
     * Capacité de remboursement de l'entreprise.
     *
     * @var int|null
     */
    protected $capaciteRemboursement;
    /**
     * Ratio d'endettement (Gearing) de l'entreprise.
     *
     * @var int|null
     */
    protected $ratioEndettement;
    /**
     * Autonomie financière (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $autonomieFinanciere;
    /**
     * Taux de levier (DFN/EBITDA) de l'entreprise.
     *
     * @var int|null
     */
    protected $tauxLevier;
    /**
     * Etat des dettes à 1 an au plus de l'entreprise.
     *
     * @var int|null
     */
    protected $etatDettes1AnAuPlus;
    /**
     * Liquidité générale de l'entreprise.
     *
     * @var int|null
     */
    protected $liquiditeGenerale;
    /**
     * Couverture des dettes de l'entreprise.
     *
     * @var int|null
     */
    protected $couvertureDettes;
    /**
     * Marge nette (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $margeNette;
    /**
     * Rentabilité sur fonds propres (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $rentabiliteFondsPropres;
    /**
     * Rentabilité économique (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $rentabiliteEconomique;
    /**
     * Valeur ajoutée de l'entreprise.
     *
     * @var int|null
     */
    protected $valeurAjoutee;
    /**
     * Valeur ajoutée / CA (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $valeurAjouteeCA;
    /**
     * Salaires et charges sociales de l'entreprise.
     *
     * @var int|null
     */
    protected $salairesChargesSociales;
    /**
     * Salaires / CA (en %) de l'entreprise.
     *
     * @var int|null
     */
    protected $salairesCA;
    /**
     * Impôts et taxes de l'entreprise.
     *
     * @var int|null
     */
    protected $impotsTaxes;

    /**
     * Année de cloture d'exercice.
     */
    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    /**
     * Année de cloture d'exercice.
     */
    public function setAnnee(?int $annee): self
    {
        $this->initialized['annee'] = true;
        $this->annee = $annee;

        return $this;
    }

    /**
     * Date de cloture de l'exercice des finances de l'entreprise.
     */
    public function getDateDeClotureExercice(): ?\DateTime
    {
        return $this->dateDeClotureExercice;
    }

    /**
     * Date de cloture de l'exercice des finances de l'entreprise.
     */
    public function setDateDeClotureExercice(?\DateTime $dateDeClotureExercice): self
    {
        $this->initialized['dateDeClotureExercice'] = true;
        $this->dateDeClotureExercice = $dateDeClotureExercice;

        return $this;
    }

    /**
     * Durée de l'exercice de l'entreprise.".
     */
    public function getDureeExercice(): ?int
    {
        return $this->dureeExercice;
    }

    /**
     * Durée de l'exercice de l'entreprise.".
     */
    public function setDureeExercice(?int $dureeExercice): self
    {
        $this->initialized['dureeExercice'] = true;
        $this->dureeExercice = $dureeExercice;

        return $this;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     */
    public function getChiffreAffaires(): ?int
    {
        return $this->chiffreAffaires;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     */
    public function setChiffreAffaires(?int $chiffreAffaires): self
    {
        $this->initialized['chiffreAffaires'] = true;
        $this->chiffreAffaires = $chiffreAffaires;

        return $this;
    }

    /**
     * Résultat de l'entreprise.
     */
    public function getResultat(): ?int
    {
        return $this->resultat;
    }

    /**
     * Résultat de l'entreprise.
     */
    public function setResultat(?int $resultat): self
    {
        $this->initialized['resultat'] = true;
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Effectif de l'entreprise.
     */
    public function getEffectif(): ?int
    {
        return $this->effectif;
    }

    /**
     * Effectif de l'entreprise.
     */
    public function setEffectif(?int $effectif): self
    {
        $this->initialized['effectif'] = true;
        $this->effectif = $effectif;

        return $this;
    }

    /**
     * Marge brute de l'entreprise.
     */
    public function getMargeBrute(): ?int
    {
        return $this->margeBrute;
    }

    /**
     * Marge brute de l'entreprise.
     */
    public function setMargeBrute(?int $margeBrute): self
    {
        $this->initialized['margeBrute'] = true;
        $this->margeBrute = $margeBrute;

        return $this;
    }

    /**
     * Excédent brut d'exploitation (EBITDA) de l'entreprise.
     */
    public function getExcedentBrutExploitation(): ?int
    {
        return $this->excedentBrutExploitation;
    }

    /**
     * Excédent brut d'exploitation (EBITDA) de l'entreprise.
     */
    public function setExcedentBrutExploitation(?int $excedentBrutExploitation): self
    {
        $this->initialized['excedentBrutExploitation'] = true;
        $this->excedentBrutExploitation = $excedentBrutExploitation;

        return $this;
    }

    /**
     * Résultat d'exploitation (EBIT) de l'entreprise.
     */
    public function getResultatExploitation(): ?int
    {
        return $this->resultatExploitation;
    }

    /**
     * Résultat d'exploitation (EBIT) de l'entreprise.
     */
    public function setResultatExploitation(?int $resultatExploitation): self
    {
        $this->initialized['resultatExploitation'] = true;
        $this->resultatExploitation = $resultatExploitation;

        return $this;
    }

    /**
     * Taux de croissance du chiffre d'affaires (en %) de l'entreprise.
     */
    public function getTauxCroissanceChiffreAffaires(): ?int
    {
        return $this->tauxCroissanceChiffreAffaires;
    }

    /**
     * Taux de croissance du chiffre d'affaires (en %) de l'entreprise.
     */
    public function setTauxCroissanceChiffreAffaires(?int $tauxCroissanceChiffreAffaires): self
    {
        $this->initialized['tauxCroissanceChiffreAffaires'] = true;
        $this->tauxCroissanceChiffreAffaires = $tauxCroissanceChiffreAffaires;

        return $this;
    }

    /**
     * Taux de marge brute (en %) de l'entreprise.
     */
    public function getTauxMargeBrute(): ?int
    {
        return $this->tauxMargeBrute;
    }

    /**
     * Taux de marge brute (en %) de l'entreprise.
     */
    public function setTauxMargeBrute(?int $tauxMargeBrute): self
    {
        $this->initialized['tauxMargeBrute'] = true;
        $this->tauxMargeBrute = $tauxMargeBrute;

        return $this;
    }

    /**
     * Taux de marge d'EBITDA (en %) de l'entreprise.
     */
    public function getTauxMargeEBITDA(): ?int
    {
        return $this->tauxMargeEBITDA;
    }

    /**
     * Taux de marge d'EBITDA (en %) de l'entreprise.
     */
    public function setTauxMargeEBITDA(?int $tauxMargeEBITDA): self
    {
        $this->initialized['tauxMargeEBITDA'] = true;
        $this->tauxMargeEBITDA = $tauxMargeEBITDA;

        return $this;
    }

    /**
     * Taux de marge opérationnelle (EBIT) (en %) de l'entreprise.
     */
    public function getTauxMargeOperationnelle(): ?int
    {
        return $this->tauxMargeOperationnelle;
    }

    /**
     * Taux de marge opérationnelle (EBIT) (en %) de l'entreprise.
     */
    public function setTauxMargeOperationnelle(?int $tauxMargeOperationnelle): self
    {
        $this->initialized['tauxMargeOperationnelle'] = true;
        $this->tauxMargeOperationnelle = $tauxMargeOperationnelle;

        return $this;
    }

    /**
     * BFR (Besoin en fonds de roulement) de l'entreprise.
     */
    public function getBFR(): ?int
    {
        return $this->bFR;
    }

    /**
     * BFR (Besoin en fonds de roulement) de l'entreprise.
     */
    public function setBFR(?int $bFR): self
    {
        $this->initialized['bFR'] = true;
        $this->bFR = $bFR;

        return $this;
    }

    /**
     * BFR exploitation de l'entreprise.
     */
    public function getBFRExploitation(): ?int
    {
        return $this->bFRExploitation;
    }

    /**
     * BFR exploitation de l'entreprise.
     */
    public function setBFRExploitation(?int $bFRExploitation): self
    {
        $this->initialized['bFRExploitation'] = true;
        $this->bFRExploitation = $bFRExploitation;

        return $this;
    }

    /**
     * BFR hors exploitation de l'entreprise.
     */
    public function getBFRHorsExploitation(): ?int
    {
        return $this->bFRHorsExploitation;
    }

    /**
     * BFR hors exploitation de l'entreprise.
     */
    public function setBFRHorsExploitation(?int $bFRHorsExploitation): self
    {
        $this->initialized['bFRHorsExploitation'] = true;
        $this->bFRHorsExploitation = $bFRHorsExploitation;

        return $this;
    }

    /**
     * BFR (en jours de CA) de l'entreprise.
     */
    public function getBFRJoursCA(): ?int
    {
        return $this->bFRJoursCA;
    }

    /**
     * BFR (en jours de CA) de l'entreprise.
     */
    public function setBFRJoursCA(?int $bFRJoursCA): self
    {
        $this->initialized['bFRJoursCA'] = true;
        $this->bFRJoursCA = $bFRJoursCA;

        return $this;
    }

    /**
     * BFR exploitation (en jours de CA) de l'entreprise.
     */
    public function getBFRExploitationJoursCA(): ?int
    {
        return $this->bFRExploitationJoursCA;
    }

    /**
     * BFR exploitation (en jours de CA) de l'entreprise.
     */
    public function setBFRExploitationJoursCA(?int $bFRExploitationJoursCA): self
    {
        $this->initialized['bFRExploitationJoursCA'] = true;
        $this->bFRExploitationJoursCA = $bFRExploitationJoursCA;

        return $this;
    }

    /**
     * BFR hors exploitation (en jours de CA) de l'entreprise.
     */
    public function getBFRHorsExploitationJoursCA(): ?int
    {
        return $this->bFRHorsExploitationJoursCA;
    }

    /**
     * BFR hors exploitation (en jours de CA) de l'entreprise.
     */
    public function setBFRHorsExploitationJoursCA(?int $bFRHorsExploitationJoursCA): self
    {
        $this->initialized['bFRHorsExploitationJoursCA'] = true;
        $this->bFRHorsExploitationJoursCA = $bFRHorsExploitationJoursCA;

        return $this;
    }

    /**
     * Délai de paiement clients (en jours) de l'entreprise.
     */
    public function getDelaiPaiementClientsJours(): ?int
    {
        return $this->delaiPaiementClientsJours;
    }

    /**
     * Délai de paiement clients (en jours) de l'entreprise.
     */
    public function setDelaiPaiementClientsJours(?int $delaiPaiementClientsJours): self
    {
        $this->initialized['delaiPaiementClientsJours'] = true;
        $this->delaiPaiementClientsJours = $delaiPaiementClientsJours;

        return $this;
    }

    /**
     * Délai de paiement fournisseurs (en jours) de l'entreprise.
     */
    public function getDelaiPaiementFournisseursJours(): ?int
    {
        return $this->delaiPaiementFournisseursJours;
    }

    /**
     * Délai de paiement fournisseurs (en jours) de l'entreprise.
     */
    public function setDelaiPaiementFournisseursJours(?int $delaiPaiementFournisseursJours): self
    {
        $this->initialized['delaiPaiementFournisseursJours'] = true;
        $this->delaiPaiementFournisseursJours = $delaiPaiementFournisseursJours;

        return $this;
    }

    /**
     * Ratio des stocks / CA (en jours) de l'entreprise.
     */
    public function getRatioStockCAJours(): ?int
    {
        return $this->ratioStockCAJours;
    }

    /**
     * Ratio des stocks / CA (en jours) de l'entreprise.
     */
    public function setRatioStockCAJours(?int $ratioStockCAJours): self
    {
        $this->initialized['ratioStockCAJours'] = true;
        $this->ratioStockCAJours = $ratioStockCAJours;

        return $this;
    }

    /**
     * Capacité d'autofinancement de l'entreprise.
     */
    public function getCapaciteAutofinancement(): ?int
    {
        return $this->capaciteAutofinancement;
    }

    /**
     * Capacité d'autofinancement de l'entreprise.
     */
    public function setCapaciteAutofinancement(?int $capaciteAutofinancement): self
    {
        $this->initialized['capaciteAutofinancement'] = true;
        $this->capaciteAutofinancement = $capaciteAutofinancement;

        return $this;
    }

    /**
     * Capacité d'autofinancement / CA (en %) de l'entreprise.
     */
    public function getCapaciteAutofinancementCA(): ?int
    {
        return $this->capaciteAutofinancementCA;
    }

    /**
     * Capacité d'autofinancement / CA (en %) de l'entreprise.
     */
    public function setCapaciteAutofinancementCA(?int $capaciteAutofinancementCA): self
    {
        $this->initialized['capaciteAutofinancementCA'] = true;
        $this->capaciteAutofinancementCA = $capaciteAutofinancementCA;

        return $this;
    }

    /**
     * Fonds de roulement net global de l'entreprise.
     */
    public function getFondsRoulementNetGlobal(): ?int
    {
        return $this->fondsRoulementNetGlobal;
    }

    /**
     * Fonds de roulement net global de l'entreprise.
     */
    public function setFondsRoulementNetGlobal(?int $fondsRoulementNetGlobal): self
    {
        $this->initialized['fondsRoulementNetGlobal'] = true;
        $this->fondsRoulementNetGlobal = $fondsRoulementNetGlobal;

        return $this;
    }

    /**
     * Couverture du BFR de l'entreprise.
     */
    public function getCouvertureBFR(): ?int
    {
        return $this->couvertureBFR;
    }

    /**
     * Couverture du BFR de l'entreprise.
     */
    public function setCouvertureBFR(?int $couvertureBFR): self
    {
        $this->initialized['couvertureBFR'] = true;
        $this->couvertureBFR = $couvertureBFR;

        return $this;
    }

    /**
     * Trésorerie de l'entreprise.
     */
    public function getTresorerie(): ?int
    {
        return $this->tresorerie;
    }

    /**
     * Trésorerie de l'entreprise.
     */
    public function setTresorerie(?int $tresorerie): self
    {
        $this->initialized['tresorerie'] = true;
        $this->tresorerie = $tresorerie;

        return $this;
    }

    /**
     * Dettes financières de l'entreprise.
     */
    public function getDettesFinancieres(): ?int
    {
        return $this->dettesFinancieres;
    }

    /**
     * Dettes financières de l'entreprise.
     */
    public function setDettesFinancieres(?int $dettesFinancieres): self
    {
        $this->initialized['dettesFinancieres'] = true;
        $this->dettesFinancieres = $dettesFinancieres;

        return $this;
    }

    /**
     * Capacité de remboursement de l'entreprise.
     */
    public function getCapaciteRemboursement(): ?int
    {
        return $this->capaciteRemboursement;
    }

    /**
     * Capacité de remboursement de l'entreprise.
     */
    public function setCapaciteRemboursement(?int $capaciteRemboursement): self
    {
        $this->initialized['capaciteRemboursement'] = true;
        $this->capaciteRemboursement = $capaciteRemboursement;

        return $this;
    }

    /**
     * Ratio d'endettement (Gearing) de l'entreprise.
     */
    public function getRatioEndettement(): ?int
    {
        return $this->ratioEndettement;
    }

    /**
     * Ratio d'endettement (Gearing) de l'entreprise.
     */
    public function setRatioEndettement(?int $ratioEndettement): self
    {
        $this->initialized['ratioEndettement'] = true;
        $this->ratioEndettement = $ratioEndettement;

        return $this;
    }

    /**
     * Autonomie financière (en %) de l'entreprise.
     */
    public function getAutonomieFinanciere(): ?int
    {
        return $this->autonomieFinanciere;
    }

    /**
     * Autonomie financière (en %) de l'entreprise.
     */
    public function setAutonomieFinanciere(?int $autonomieFinanciere): self
    {
        $this->initialized['autonomieFinanciere'] = true;
        $this->autonomieFinanciere = $autonomieFinanciere;

        return $this;
    }

    /**
     * Taux de levier (DFN/EBITDA) de l'entreprise.
     */
    public function getTauxLevier(): ?int
    {
        return $this->tauxLevier;
    }

    /**
     * Taux de levier (DFN/EBITDA) de l'entreprise.
     */
    public function setTauxLevier(?int $tauxLevier): self
    {
        $this->initialized['tauxLevier'] = true;
        $this->tauxLevier = $tauxLevier;

        return $this;
    }

    /**
     * Etat des dettes à 1 an au plus de l'entreprise.
     */
    public function getEtatDettes1AnAuPlus(): ?int
    {
        return $this->etatDettes1AnAuPlus;
    }

    /**
     * Etat des dettes à 1 an au plus de l'entreprise.
     */
    public function setEtatDettes1AnAuPlus(?int $etatDettes1AnAuPlus): self
    {
        $this->initialized['etatDettes1AnAuPlus'] = true;
        $this->etatDettes1AnAuPlus = $etatDettes1AnAuPlus;

        return $this;
    }

    /**
     * Liquidité générale de l'entreprise.
     */
    public function getLiquiditeGenerale(): ?int
    {
        return $this->liquiditeGenerale;
    }

    /**
     * Liquidité générale de l'entreprise.
     */
    public function setLiquiditeGenerale(?int $liquiditeGenerale): self
    {
        $this->initialized['liquiditeGenerale'] = true;
        $this->liquiditeGenerale = $liquiditeGenerale;

        return $this;
    }

    /**
     * Couverture des dettes de l'entreprise.
     */
    public function getCouvertureDettes(): ?int
    {
        return $this->couvertureDettes;
    }

    /**
     * Couverture des dettes de l'entreprise.
     */
    public function setCouvertureDettes(?int $couvertureDettes): self
    {
        $this->initialized['couvertureDettes'] = true;
        $this->couvertureDettes = $couvertureDettes;

        return $this;
    }

    /**
     * Marge nette (en %) de l'entreprise.
     */
    public function getMargeNette(): ?int
    {
        return $this->margeNette;
    }

    /**
     * Marge nette (en %) de l'entreprise.
     */
    public function setMargeNette(?int $margeNette): self
    {
        $this->initialized['margeNette'] = true;
        $this->margeNette = $margeNette;

        return $this;
    }

    /**
     * Rentabilité sur fonds propres (en %) de l'entreprise.
     */
    public function getRentabiliteFondsPropres(): ?int
    {
        return $this->rentabiliteFondsPropres;
    }

    /**
     * Rentabilité sur fonds propres (en %) de l'entreprise.
     */
    public function setRentabiliteFondsPropres(?int $rentabiliteFondsPropres): self
    {
        $this->initialized['rentabiliteFondsPropres'] = true;
        $this->rentabiliteFondsPropres = $rentabiliteFondsPropres;

        return $this;
    }

    /**
     * Rentabilité économique (en %) de l'entreprise.
     */
    public function getRentabiliteEconomique(): ?int
    {
        return $this->rentabiliteEconomique;
    }

    /**
     * Rentabilité économique (en %) de l'entreprise.
     */
    public function setRentabiliteEconomique(?int $rentabiliteEconomique): self
    {
        $this->initialized['rentabiliteEconomique'] = true;
        $this->rentabiliteEconomique = $rentabiliteEconomique;

        return $this;
    }

    /**
     * Valeur ajoutée de l'entreprise.
     */
    public function getValeurAjoutee(): ?int
    {
        return $this->valeurAjoutee;
    }

    /**
     * Valeur ajoutée de l'entreprise.
     */
    public function setValeurAjoutee(?int $valeurAjoutee): self
    {
        $this->initialized['valeurAjoutee'] = true;
        $this->valeurAjoutee = $valeurAjoutee;

        return $this;
    }

    /**
     * Valeur ajoutée / CA (en %) de l'entreprise.
     */
    public function getValeurAjouteeCA(): ?int
    {
        return $this->valeurAjouteeCA;
    }

    /**
     * Valeur ajoutée / CA (en %) de l'entreprise.
     */
    public function setValeurAjouteeCA(?int $valeurAjouteeCA): self
    {
        $this->initialized['valeurAjouteeCA'] = true;
        $this->valeurAjouteeCA = $valeurAjouteeCA;

        return $this;
    }

    /**
     * Salaires et charges sociales de l'entreprise.
     */
    public function getSalairesChargesSociales(): ?int
    {
        return $this->salairesChargesSociales;
    }

    /**
     * Salaires et charges sociales de l'entreprise.
     */
    public function setSalairesChargesSociales(?int $salairesChargesSociales): self
    {
        $this->initialized['salairesChargesSociales'] = true;
        $this->salairesChargesSociales = $salairesChargesSociales;

        return $this;
    }

    /**
     * Salaires / CA (en %) de l'entreprise.
     */
    public function getSalairesCA(): ?int
    {
        return $this->salairesCA;
    }

    /**
     * Salaires / CA (en %) de l'entreprise.
     */
    public function setSalairesCA(?int $salairesCA): self
    {
        $this->initialized['salairesCA'] = true;
        $this->salairesCA = $salairesCA;

        return $this;
    }

    /**
     * Impôts et taxes de l'entreprise.
     */
    public function getImpotsTaxes(): ?int
    {
        return $this->impotsTaxes;
    }

    /**
     * Impôts et taxes de l'entreprise.
     */
    public function setImpotsTaxes(?int $impotsTaxes): self
    {
        $this->initialized['impotsTaxes'] = true;
        $this->impotsTaxes = $impotsTaxes;

        return $this;
    }
}
