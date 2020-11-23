<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * */

class book
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */

    private $id;

    /**
     * @ORM\Column(type="string")
     */

    private $title;

    /**
     * @ORM\Column(type="string")
     */

    private $author;

    /**
     * @ORM\Column(type="integer")
     */

    private $nbPages;

    /**
     * @ORM\Column(type="date")
     */

    private $publicationDate;

    /**
     * @ORM\Column(type="integer")
     */

    private $available;

    /**
     * @ORM\Column(type="text")
     */

    private $resume;

}