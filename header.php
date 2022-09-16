<!--session['user_id']があるかどうかで表示する文言を変えている、あればログインしている、なければログインしている-->

<header>
    <div class="site-width">
        <h1><a href="index.php">Nail STORE</a></h1>
        <nav id="top-nav">
            <ul>
                <?php
                if(empty($_SESSION['user_id'])){
                ?>
<!--                    <a href="signup.php" class="btn btn-primary">ユーザー登録</a>-->
                    <a href="login.php" class="btn btn-primary">ログイン</a>
                <?php
                }else{
                ?>
                <li><a href="mypage.php">マイページ</a></li>
                <li><a href="logout.php">ログアウト</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</header>
