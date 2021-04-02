<?php 

function field($id, $label, $type){
    echo "
        <section>
            <label for=\"$id\">$label</label><br>
            <input type=\"$type\" name=\"$id\" id=\"$id\">
        </section>
    ";
}

function button($form, $name, $value){
    echo "
        <section>
            <button form=\"$form\" name=\"$name\">$value</button>
            <span><a href=\"#\">Already have an account?</span>
        </section>
    ";
}

?>