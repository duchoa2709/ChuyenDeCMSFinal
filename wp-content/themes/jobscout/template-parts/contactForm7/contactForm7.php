<style>
.contentFooter {
    max-width: 1000px;
    margin: auto;
}

.inputEmail input[type="submit"] {
    font-weight: 800;
    color: #fff;
    font-size: 20px;
    line-height: 2rem;/* 32px */
    border-width: 1px;
    border-style: solid;
    border-color: #fff;
    border-radius: 0;
    background-color: transparent;
}

.emailAndIcon p{
    background-color: #fff;
    display: flex;
    align-items: center;
    border-radius: 0;
    padding: 0 10px;
    width: 100%;
}

.emailAndIcon input[type="email"] {
    border: none;
    padding-left: 10px;
}
.emailAndIcon input[type="email"]:focus {
    outline: none;
}
</style>

<div class="bg-[#ea751e]">
    <div class="container">
        <div class="contentFooter">
            <?php echo do_shortcode('[contact-form-7 id="6d8834d" title="Email"]'); ?>
        </div>
    </div>
</div>