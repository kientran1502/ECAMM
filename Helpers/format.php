<?php

/**
 * Format Class
 */
class Format
{

    public function formatDate($date)
    {
        return date('F j, Y, g:i a', strtotime($date));
    }

    public function textShorten($text, $limit = 400)
    {
        $text = $text . "";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . ".....";
        return $text;
    }

    public function validation($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function title()
    {
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');
        $title = str_replace('_', ' ', $title);
        if ($title == 'index') {
            $title = 'home';
        } elseif ($title == 'contact') {
            $title = 'contact';
        }
        return $title = ucfirst($title);
    }

    public function alert($type, $msg)
    {
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

        echo <<<ALERT
<div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
    <strong class="me-3">$msg</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<script>
    // Tự động đóng alert sau 3 giây
    setTimeout(function() {
        var alert = document.querySelector('.custom-alert');
        if(alert){
            alert.classList.remove('show');
            alert.classList.add('fade');
            alert.addEventListener('transitionend', () => alert.remove());
        }
    }, 2000);
</script>
ALERT;
    }
}
