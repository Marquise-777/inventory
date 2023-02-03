<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            About
        </h2>
    </x-slot><html lang="en">
    <style>
        .column {
             float: left;
             width: 20%;
             height: auto;
             margin-bottom: 8px;
             margin-left:4rem;
             padding: 0 4px;
        }
        .card{
            /* float:initial; */
            width: auto;
            height: auto;
            background-color: rgb(245, 245, 245);
            border-color: rgba(245 , 245, 245);
        }
        .card-body{
            color:black;
        }
        .card-img-top{
            border-radius: 50%;
            opacity: 100%;
        }
    </style>
    <div class="head">
        <h2 style="color:black; text-align:center;">About Us</h2>
    </div>
    <div class="row">
        <div class="column">
            <div class="card" style="width: 13rem; margin-top: 8%; ">
                <img src="{{ asset("tre.png") }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h1 class="container" style="font-size: 18px; text-align: center;">Imanuel Lallawmkima</h1>
                    <p style="text-align: center;">Senior Developer</p>
                </div>
              </div>
        </div>
        <div class="column">
            <div class="card" style="width: 13rem; margin-top: 8%;">
                <img src="{{ asset("oo.jpg") }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="container" style="font-size: 18px; text-align: center;">Miriam Lalramthari</h1>
                    <p style="text-align: center;">Design Team</p>
                </div>
              </div>
        </div>
        <div class="column">
            <div class="card" style="width: 15rem; margin-top: 8%; ">
                <img src="{{ asset("zuala.png") }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="container" style="font-size: 18px; text-align: center;">Lalhmangaihzuala</h1>
                    <p style="text-align: center;">Design Team</p>
                </div>
              </div>
        </div>
        <div class="column">
            <div class="card" style="width: 13rem; margin-top: 8%;">
                <img src="{{ asset("jona.png") }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="container" style="font-size: 18px; text-align: center;">Jonathan Biakdingliana</h1>
                    <p style="text-align: center;">Frontend Developer</p>
                </div>
              </div>
        </div>
    </div>
</x-app-layout>