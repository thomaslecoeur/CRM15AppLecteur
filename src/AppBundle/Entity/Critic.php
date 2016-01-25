<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Critic
 *
 * @ORM\Table(name="Critic")
 * @ORM\Entity
 */
class Critic
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="score", type="boolean", nullable=false)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="review_id", type="bigint", nullable=false)
     */
    private $reviewId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

