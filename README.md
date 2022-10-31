# PHP-Doctine-MySQL-Fill-in-form
This is a Fill in form in PHP, Doctine,Boostrap and MySQL. A Full-stack project in other words

I faced some issues creating a table with Doctrine (src/Entity/cv.php)
doctine made automatically id as primary key, in my php code(public/) $names was my first so i solved the challenge with by commenting

// iam not using 'id' as primary key so i commented it
    // #[ORM\Id]
    // #[ORM\GeneratedValue]
    // #[ORM\Column]
    // private ?int $id = null;
    
    // iam not using 'id' as primary key so i commented it
    // public function getId(): ?intJ
    // {
    //     return $this->id;
    // }

