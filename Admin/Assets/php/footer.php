</section>

</main>

<div class="mainDel">
    <div style="width: 100%;height: 100%;background: #000000;opacity: 0.7;"></div>
    <div class="delete_form">
        <p>آیا مطمین هستید که میخواهید این ایتم را حذف کنید ؟</p>
        <div class="delete_form_info">
            <p class="name">title : </p>
            <p class="name_movier_form">summit 1a</p>
        </div>
        <div class="yes_no">
            <a href="#" class="no">خیر</a>
            <form action method="POST" enctype="multipart/form-data">
                <input type="text" class="valDelete" name="id" id="idd">
                <button type="submit" class="Delete" name="action" value="Delete">بله</button>
            </form>
        </div>
    </div>
</div>

<div class="mainForm">
    <div style="width: 100%;height: 100%;background: #000000;opacity: 0.7;"></div>
    <form class="formPage" action method="get" enctype="multipart/form-data">
        <div class="inputs">

            <div class="inpots__group">

                <div class="input_label">
                    <label for="id">id</label>
                    <input id="input_id" type="number" name="id" readonly>
                </div>

                <div class="input_label">
                    <label for="id_category">id_category</label>
                    <input id="input_id_category" name="id_category" type="text" value="Persian">
                </div>

                <div class="input_label inpvideo">
                    <label for="imgBox">img</label>
                    <input id="imgBox" name="imgBox" type="file" style="display: none;">
                    <input type="button" value="Image Box (200 x 300)" onclick="document.getElementById('imgBox').click();" />
                </div>

                <div class="input_label">
                    <label for="title">title</label>
                    <input id="input_title" name="title" type="text" value="کتاب Summit 1a">
                </div>

                <div class="input_label textarea">
                    <label for="story">des</label>
                    <textarea id="input_story" name="story" type="text"></textarea>
                </div>

                <div class="input_label">
                    <label for="date">title</label>
                    <input id="input_date" name="date" type="text" value="1402/12/20">
                </div>

                <div class="input_label">
                    <label for="number">number</label>
                    <input id="input_number" name="number" type="text" value="8">
                </div>
            </div>

            <i class="icon-times close" style="margin: -14px -14px 0 0;background: #2c2f35;padding: 6px;border-radius: 100%;border: 1px solid #4a4d52;cursor: pointer;position: absolute;top: 0px;right: 0px;"></i>

            <button type="submit" class="Confirm" name="action" value="Insert">Confirm</button>
        </div>

    </form>
</div>

<script type="text/template" id="template-demo1">
    <div class="demo-section clearfix">
    <div class="demo-section-title"></div>
    <div class="inner-left preview">
        <div class="data-container"></div>
    </div>
    <div class="inner-right code">

    </div>
</div>
</script>

<!-- <script>
let Head = $('.Head').html();
$('.Head').html("");
Head = Head.split("");
color = ['#55c0ff', '#2797d9', '#00a0ff', '#4fbdff', '#55c0ff', '#2797d9', '#00a0ff', '#4fbdff', '#55c0ff',
    '#2797d9', '#00a0ff', '#4fbdff', '#55c0ff', '#2797d9', '#00a0ff', '#4fbdff', '#55c0ff', '#2797d9',
    '#00a0ff', '#4fbdff'
]
color.sort(() => Math.random() - 0.5);
for (let i = 0; i < Head.length; i++) {
    let element = Head[i];
    for (let i = 0; i < color.length; i++) {
        const element = color[i];

    }
    $('.Head').append('<p style="color: ' + color[i] + ';text-shadow: 0px 0px 20px ' + color[i] + ';">' +
        element + '</p>');
}
</script> -->

</script>
</body>

</html>