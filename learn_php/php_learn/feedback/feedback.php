<?php include 'inc/header.php' ?>
   
<?php
              $feedback = [
                [
                  'id' => '1',
                  'name' => 'Beth Williams',
                  'email' => 'beth@gmail.com',
                  'body' => 'Traversy Media is ok'
                ],
                [
                  'id' => '2',
                  'name' => 'Walt Williams',
                  'email' => 'walt@gmail.com',
                  'body' => 'Traversy Media sucks'
                ],
                [ 
                  'id' => '3',
                  'name' => 'Bill Johnson',
                  'email' => 'bill@gmail.com',
                  'body' => 'Traversy Media Rocks!'
                ]
              ];
            ?>

<?php   if(empty($feedback)):  ?>
  <p class = "leadmt3">There is no Feedback</p> 
<?php endif; ?>

<?php foreach($feedback as $item): ?>
  <div class="card_my-3">
  <div class="card-body">
      <php? echo $item ['body']; ?> 
  </div>
</div>
<?php endforeach; ?>
 
<?php include 'inc/footer.php' ?>
