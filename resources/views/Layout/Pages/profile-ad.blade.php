@extends('Layout.master')
@section('title', 'Home')

@section('style')
    <style>
        .profileeee {
            /* height: 100vh; */
            margin: 200px auto;
        }

        .profileeee .side-nav {
            width: 20%;
            text-align: center;
            background-color: rgb(64, 66, 66);
            height: 100vh;
            border-radius: 10px;
            /* display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch; */
        }

        .profileeee .side-nav .team-member {
            padding: 0;
            /* margin-bottom: 30px; */
        }
        @media (max-width: 879px) {
            .profileeee{
                margin: 70px auto;
            }
            .profileeee .side-nav {
                display: flex;
                flex-direction: column;
                width: 100%;
            }
            .profileeee .side-nav ul{
                display: flex;
                flex-direction: row;
            }

         }
            </style>
@endsection

@section('content')
    <div class="profileeee">
        <aside class="side-nav">
            <div class="team-member">
                <a href="#"> <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." /></a>
                <h4>Parveen Anand</h4>
                <p class="text-muted">Lead Designer</p>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </aside>




    </div>

@endsection

@section('script')
    <script></script>

@endsection
