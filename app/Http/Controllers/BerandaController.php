<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;

class BerandaController extends Controller
{
    public function index()
    {
        $projects = [
            (object) [
                'name'=>'Book Rental System',
                'about'=>'Readify is a web-based book rental application that allows users to browse, borrow, and return books online. It also provides an administrative dashboard for managing books, users, categories, and rental transactions efficiently.',
                'key_takeaways'=>'Responsive UI with Bootstrap|MVC Architecture Implementation|Laravel CRUD Development|User Authentication & Authorization',
                'tech_stack'=>'Laravel,Bootstrap,MySQL,JavaScript',
                'repo_link'=>'',
                'thumbnail'=>'beranda.png'
            ],
            (object) [
                'name'=>'Smart Cattle Monitoring System',
                'about'=>'An IoT-based Smart Cattle Monitoring System developed using Laravel to monitor environmental conditions and cattle behavior in real time. The system collects data from multiple sensors, including temperature, humidity, ammonia (NH3), carbon monoxide (CO), light intensity, and motion sensors. The collected data is transmitted from an ESP8266 microcontroller to the Laravel backend, where it is visualized through interactive dashboards, historical data tables, charts, and Temperature Humidity Index (THI) analysis to support better livestock management and decision-making.',
                'key_takeaways'=>'Designed and developed a full-stack IoT monitoring web application using Laravel MVC Architecture|Integrated ESP8266 with multiple environmental sensors through HTTP API communication|Implemented real-time monitoring for temperature, humidity, NH3, CO, light intensity, and cattle behavior|Built interactive dashboards with historical sensor data visualization and charts|Implemented Temperature Humidity Index (THI) analysis to evaluate livestock environmental conditions|Developed RESTful APIs for seamless communication between IoT devices and the Laravel backend|Managed relational databases using MySQL and Eloquent ORM',
                'tech_stack'=>'Laravel,PHP,Bootstrap,JavaScript,MySQL,ESP8266',
                'repo_link'=>'',
                'thumbnail'=>'image.png'
            ]
        ]
            

    return view('beranda', compact('projects'));
    }
}
