<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()->create([
            "name" => "api-tasks",
            "description" => "Crear api para retornar tareas pendientes",
            "status" => 0,
            "company_id" => 1,
            "user_id" => null,
            "start_date" => "2023-01-12 12:57:47",
            "deadline" => "2025-12-31 14:57:47",
        ]);

        Task::factory()->create([
            "name" => "Desarrollo app",
            "description" => "Desarrollar aplicación web para la empresa IBM",
            "status" => 0,
            "company_id" => 2,
            "user_id" => null,
            "start_date" => "2022-02-20 11:57:47",
            "deadline" => "2024-05-15 08:57:47"
        ]);

        Task::factory()->create([
            "name" => "Desarrollo de la BD",
            "description" => "Desarrollo de base de datos para manejo de información de la BD",
            "status" => 0,
            "company_id" => 2,
            "user_id" => null,
            "start_date" => "2020-09-09 15:55:47",
            "deadline" => "2027-06-27 16:57:47"
        ]);

        Task::factory()->create([
            "name" => "Generar datos aleatorios",
            "description" => "Datos aleatorios relacionados a la aplicación userapp",
            "status" => 0,
            "company_id" => 1,
            "user_id" => null,
            "start_date" => "2022-05-28 11:57:47",
            "deadline" => "2025-12-31 14:57:47"
        ]);

        Task::factory()->create([
            "name" => "Asignar roles a los usuarios",
            "description" => "Roles dentro de la aplicación taskmanager, para tener control de los accesos a los módulos",
            "status" => 0,
            "company_id" => 1,
            "user_id" => null,
            "start_date" => "2019-02-18 08:57:47",
            "deadline" => "2030-01-01 22:57:47"
        ]);

        Task::factory(20)->create();
    }
}
