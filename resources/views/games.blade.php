@extends('main.entertainment')
@section('mainContent')
    <div class="game-options">
        <!-- Back Button -->
         <a class="back-button" href="{{ route('dashboard.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
         </a>

         <h2>Welcome to Attendo Games</h2>
         <p>Select the game below that you want to play.</p>

         <div class="games">
            <!-- Skribbl.io link -->
             <a href="https://skribbl.io/" target="_blank">
                <img src="img/skribbl.jpg" alt="Skribbl.io" class="games1">
             </a>

             <!-- Quiz -->
              <a href="#" target="_blank">
                <img src="img/quiz.jpg" alt="Quiz" class="games2">
              </a>

              <!-- Words of Wonder link -->
               <a href="https://www.crazygames.com/game/words-of-wonders" target="_blank">
                <img src="img/wow.jpg" alt="Words of Wonder" class="games3">
               </a>

               <!-- Chess.com link -->
                <a href="https://www.chess.com/">
                    <img src="img/chess.png" alt="Chess" class="games4">
                </a>
         </div>
    </div>
@endsection