<?php namespace App\Controllers;

class page extends BaseController 
{
   public function about()
    {
    echo "about page";
    }

    public function contact()
    {
    echo "contact page";
    }

    public function faqs()
    {
    echo "faqs page";
    }

    public function tos()
    {
        echo "Nama          : Fandi Ahmad";
        echo "TTL           : Jombang, 26 Mei 2002";
        echo "Alamat        : Dsn. Sumberbendo, Kec. Jogoroto, Kab. Jombang ";
        echo "Jenis Kelamin : laki-laki";
    }
}