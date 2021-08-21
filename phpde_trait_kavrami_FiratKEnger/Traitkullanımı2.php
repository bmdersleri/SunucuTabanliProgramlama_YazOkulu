<?php
trait Merhaba {
    public function merhabaDe() {
        echo "Merhaba";
    }
}

trait Dünya {
    public function dünyaDe() {
        echo "Dünya!";
    }
}

trait MerhabaDünya {
    use Merhaba, Dünya;
}

class MerhabaDünyam {
    use MerhabaDünya;
}

$o = new MerhabaDünyam();
$o->merhabaDe();
$o->dünyaDe();
?>