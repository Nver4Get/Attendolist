@extends('main.entertainment')
@section('mainContent')
    <div class="game-options">
        <!-- Back Button -->
        <a class="back-button" href="{{ route('dashboard.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
        </a>

        <h2>Welcome to Attendo Games</h2>
        <p>Select the game below that you want to play.</p>
        <br>
        <div class="games">
            <div class="card-group">
                <div class="card">
                    <a href="https://skribbl.io/">
                        <img src="img/skribbl.jpg" alt="Skribbl.io" class="games1 img-fluid">
                    </a>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <a href="/quiz">
                        <img src="img/quiz.jpg" alt="Quiz" class="games2 img-fluid">
                    </a>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <a href="https://www.crazygames.com/game/words-of-wonders">
                        <img src="img/wow.jpg" alt="Words of Wonder" class="games3 img-fluid">
                    </a>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <a href="https://www.chess.com/">
                        <img src="img/chess.png" alt="Chess" class="games4 img-fluid">
                    </a>
                </div>
            </div>


            <!-- Quiz -->

            <!-- Words of Wonder link -->


            <!-- Chess.com link -->

        </div>
    </div>
@endsection
