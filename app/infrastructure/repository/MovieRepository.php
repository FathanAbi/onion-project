<?php

namespace App\Infrastructure\Repository;

use App\Domain\Models\Movie;
use App\Domain\Service\Repository\MovieRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MovieRepository
{
    public function persist(Movie $movie)
    {
        $data = $this->createPayload($movie);
        DB::table('topiks')->upsert(
            $data,
            'id'
        );
    }

    public function getById(int $topik_id): ?Topik
    {
        // TODO: Implement getById() method.
    }

    private function createPayload(Topik $topik)
    {
        return [
            'id' => $topik->getId(),
            'dosen' => $topik->getNamaDosen(),
            'judul' => $topik->getJudul(),
            'status' => $topik->getStatus()->value,
        ];
    }
}