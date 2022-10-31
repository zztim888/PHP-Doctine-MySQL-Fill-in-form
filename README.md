# PHP-Doctine-MySQL-Fill-in-form
This is a Fill in form in PHP, Doctine,Boostrap and MySQL. A Full-stack project in other words

I faced some issues creating a columns with Doctrine (src/Entity/cv.php)
doctine made automatically id as primary key, in my php code(public/insert.pho) $names is my primary key so i solved the challenge by commenting
the primary key in my code(src/Entiry/Cv.php) and changing it back to names.

// iam not using 'id' as primary key so i commented it
    // #[ORM\Id]
    // #[ORM\GeneratedValue]
    // #[ORM\Column]
    // private ?int $id = null;
    
     #[ORM\Id]
    #[ORM\Column(length: 255)]
    private ?string $names = null;
    
    // iam not using 'id' as primary key so i commented it
    // public function getId(): ?intJ
    // {
    //     return $this->id;
    // }

