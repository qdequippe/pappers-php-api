<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichedepotsActesItemActesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichedepotsActesItemActesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichedepotsActesItemActesItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichedepotsActesItemActesItem' === \get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichedepotsActesItemActesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('decision', $data) && null !== $data['decision']) {
            $object->setDecision($data['decision']);
            unset($data['decision']);
        } elseif (\array_key_exists('decision', $data) && null === $data['decision']) {
            $object->setDecision(null);
        }
        if (\array_key_exists('date_acte', $data) && null !== $data['date_acte']) {
            $object->setDateActe(\DateTime::createFromFormat('Y-m-d', $data['date_acte'])->setTime(0, 0, 0));
            unset($data['date_acte']);
        } elseif (\array_key_exists('date_acte', $data) && null === $data['date_acte']) {
            $object->setDateActe(null);
        }
        if (\array_key_exists('date_acte_formate', $data) && null !== $data['date_acte_formate']) {
            $object->setDateActeFormate($data['date_acte_formate']);
            unset($data['date_acte_formate']);
        } elseif (\array_key_exists('date_acte_formate', $data) && null === $data['date_acte_formate']) {
            $object->setDateActeFormate(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('decision') && null !== $object->getDecision()) {
            $data['decision'] = $object->getDecision();
        }
        if ($object->isInitialized('dateActe') && null !== $object->getDateActe()) {
            $data['date_acte'] = $object->getDateActe()->format('Y-m-d');
        }
        if ($object->isInitialized('dateActeFormate') && null !== $object->getDateActeFormate()) {
            $data['date_acte_formate'] = $object->getDateActeFormate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
