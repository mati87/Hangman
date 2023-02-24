<div class="row" id="scoreBoardRow">
    <div class="col-md-6 text-center">
        <canvas id="canvas" width="350" height="300"></canvas>
    </div>
    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item active">SCOREBOARD</li>
            <li class="list-group-item d-flex justify-content-between">Correct Guesses<span class="badge bg-primary rounded-pill"><?php echo $_SESSION['correctGuesses']?></span></li>
            <li class="list-group-item d-flex justify-content-between">Incorrect Guesses<span class="badge bg-primary rounded-pill"><?php echo $_SESSION['incorrectGuesses']?></span></li>
            <li class="list-group-item d-flex justify-content-between">Games Won <span class="badge bg-primary rounded-pill"> <?php echo $_SESSION['gamesWon']?></span></li>
            <li class="list-group-item d-flex justify-content-between">Games Lost<span class="badge bg-primary rounded-pill"> <?php echo $_SESSION['gamesLost']?></span</li>
            <li class="list-group-item d-flex justify-content-between">Total Games PLayed<span class="badge bg-primary rounded-pill"> <?php echo $_SESSION['gamesWon'] + $_SESSION['gamesLost']?></li>
            
            <li class="list-group-item d-flex justify-content-between">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#resetConfirmModal">RESET SCOREBOARD</button>
                <button class="btn btn-outline-<?php echo $returnedColor; ?>"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom"
                    data-bs-title="Your rating is based on your percentage of correct guesses."
                
                >Rating: <?php echo $returnedGrade; ?></button>
            </li>           
        </ul>
    </div>
</div>

<?php include("resetModal.php")?>