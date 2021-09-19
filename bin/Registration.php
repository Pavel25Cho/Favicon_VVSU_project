<div id=content>
    <aside>
        <section>
            <h1>Registration:</h1>
            <form method="post" id="login_form">
                <ul id="inTouch">
                    <li>
                        <span class="twitter">Email: </span>
                        <input id="email" type="text" name="email" style="height: 26px; width: 69%"/>
                    </li>
                    <li>
                        <span class="twitter">Login: </span>
                        <input id="login" type="text" name="login" style="height: 26px; width: 69%"/>
                    </li>
                    <li>
                        <span class="twitter">Articles: </span>
                        <input id="articles" type="number" name="articles" style="height: 26px; width: 69%" min="1" max="10"/>
                    </li>
                    <li>
                        <span class="twitter">Password: </span>
                        <input id="password" type="password" name="password" style="height: 26px; width: 69%"/>
                    </li>
                    <li>
                        <span class="twitter">Repeat: </span>
                        <input id="repeatedpass" type="password" name="repeatedpass" style="height: 26px; width: 69%"/>
                    </li>
                    <input id="submit" name="submit" type="submit" value="Sign in"/>
                    <div name="message" id="message" style="font-size: large; margin-top: 5px"/>
        </section>
    </aside>
</div>
<script src="..code.jquery.com/jquery.js"></script>
<script src="../scripts/js/Registration.js"></script>
