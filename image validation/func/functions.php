<?php



function createFormInput($label,$name,$type="text")
{

 
    if($type != "textarea"){
   return ' <div>
    <label>
    '.$label.'
    </label>
    <br/>
    <input style="width:50%;height:20px;border-radius:5px"  placeholder="'.$label.'" type="'.$type.'" name="'.$name.'"/>
</div><br/>';
    }

    if($type == "textarea"){
return ' <div>
<label>
'.$label.'
</label>
<br/>
<textarea style="width:50%;height:50px;border-radius:5px"  placeholder="'.$label.'" name="'.$name.'"></textarea>
        </div><br/>';

    }
    return "Invalid Type";

}



function createButton($type="submit",$name="submit",$label ="Submit")
{
    return '<button type="'.$type.'" name="'.$name.'">'.$label.'</button>';
}

?>