<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="stylesheet" href="css/dashboard.css">

<x-app-layout>
    <div class="header">
        <div class="title">
            <p> Welcome, <span class="bold">  {{ __('Dashboard') }}  </span></p>
        </div>    
        <div class="right-header">
            <i class="icon bx bx-bell"></i>
        </div>
    </div>    

    <div class="content">
        <div class="row">
            <div class="container team">
                <a href="{{ route('team') }}">
                    <h3>Stone Roses</h3>
                    <p>Telkom University</p>
                </a>
            </div>
            <div class="container status">
                <h3>Competition Status</h3>
            </div>
            <div class="container countdown">
                <h3>Deadline Countdown</h3>
                <div class="countdown">
                    <div class="time-box">
                        <span id="hours">00</span>
                    </div>
                    <span> : </span>
                    <div class="time-box">
                        <span id="minutes">00</span>
                    </div>
                    <span> : </span>
                    <div class="time-box">
                        <span id="seconds">00</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="container competition">
                <img src="img/ux.png" alt="">

                <h3>UI/UX Competition</h3>
                <div class="btn-group">
                    <a href="#">
                        <i class="icon bx bx-download"></i>
                        <span>Guidebook</span>
                    </a>
                    <a href="">
                        <i class="icon bx bxl-whatsapp"></i>
                        <span>Group</span>
                    </a>
                </div>
            </div>
            <div class="container timeline">
                <h3>Timeline</h3>
                <div class="timeline-container">
                    <div class="timeline-item special">
                        <div class="timeline-content">
                            Registration
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            Event 2
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            Event 3
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            Event 3
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            Event 3
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="js/countdown.js"></script>
</x-app-layout>
<!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->