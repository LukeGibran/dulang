<?php 
    require 'header.admin.php';
?>
    <?php if(isset($_GET['success'])): ?>
    <div class="modal">
        <h3><i class="fas fa-check"></i> Thank you for your feedback!</h3>
    </div>
    <?php endif; ?>
    <aside>
        <div class="aside-wrapper">
            <a href="index.php" class="home-link"><i class="fas fa-arrow-left"></i> Home</a>
            <div class="message-part">
                <a href="#" class="aside-link-new">Create new <i class="fas fa-plus-circle"></i></a>
               
                <ul class="aside-messages">
                <h3 class="message-title">Messages</h3>

                <?php if(!$rows) echo '<h4 style="color:#fff;">No messages yet</h4>' ?>
                <?php foreach($rows as $row): ?>
                <li class="aside-message"><a href="viewFeedback.php?message=<?php echo $row['id']; ?>" class="aside-link"><i class="fas fa-arrow-circle-right"></i> <?php echo $row['subject']; ?></a></li>
                <?php endforeach; ?>

                    <!-- <li class="aside-message"><a href="viewFeedback.php" class="aside-link"><i class="fas fa-arrow-circle-right"></i> </a></li> -->
                </ul>
            </div>
        </div>
    </aside>
    <main>
        <div class="main-wrapper">
        <h1>Share   Your Feedback</h1>
            <form action="scripts/message.inc.php" method="post">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="" maxlength="18" required>
                </div>
                <div class="form-group">
                    <label for="message" class="subject">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" required></textarea>
                </div>

                <button type="submit" class="btn-sub" name="msg-sub">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>