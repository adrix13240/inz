<?php

use Illuminate\Database\Seeder;
use App\Segment;

class SegmentsTableSeeder extends Seeder
{
    public function run()
    {
        $segment = new Segment();
        $segment->nazwa = 'Małe';
        $segment->cena = '100';
        $segment->save();

        $segment = new Segment();
        $segment->nazwa = 'Miejskie';
        $segment->cena = '200';
        $segment->save();

        $segment = new Segment();
        $segment->nazwa = 'Kompaktowe';
        $segment->cena = '300';
        $segment->save();

        $segment = new Segment();
        $segment->nazwa = 'Kombi';
        $segment->cena = '400';
        $segment->save();

        $segment = new Segment();
        $segment->nazwa = 'Sportowe';
        $segment->cena = '800';
        $segment->save();

        $segment = new Segment();
        $segment->nazwa = 'Luksusowe';
        $segment->cena = '1000';
        $segment->save();
    }
}
