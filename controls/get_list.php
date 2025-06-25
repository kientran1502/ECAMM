<?php

include(__DIR__ . '/../lib/database.php');
include(__DIR__ . '/../Helpers/format.php');

?>


<?php

class list_register
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function get_all_registrations()
    {
        $query = "SELECT * FROM register WHERE status = '1' ORDER BY created_at ASC";
        return $this->db->select($query);
    }

    public function render_html_table_rows()
    {
        $data = $this->get_all_registrations();
        $output = '';
        $i = 1;

        if ($data) {
            while ($row = $data->fetch_assoc()) {   
                $output .= '<tr>
                    <td>' . $i++ . '</td>
                    <td>' . htmlspecialchars($row['fname']) . '</td>
                    <td>' . htmlspecialchars($this->obfuscate_email($row['email'])) . '</td>
                    <td>' . htmlspecialchars($this->obfuscate_phone($row['cell'])) . '</td>
                    <td>' . htmlspecialchars($row['affiliation']) . '</td>
                    <td>' . htmlspecialchars($row['address']) . '</td>
                    <td>' . htmlspecialchars($row['zip']) . '</td>
                </tr>';
            }
        } else {
            $output .= '<tr><td colspan="7">Chưa có ai đăng ký.</td></tr>';
        }

        return $output;
    }

    private function obfuscate_email($email)
    {
        $parts = explode("@", $email);
        $name = $parts[0];
        $domain = $parts[1];
        $length = strlen($name);

        if ($length <= 6) {
            // Nếu quá ngắn thì chỉ hiển thị ký tự đầu và cuối
            return substr($name, 0, 2) . "**" . substr($name, -2) . '@' . $domain;
        }

        $first = substr($name, 0, 3); // 3 ký tự đầu
        $last = substr($name, -2);    // 2 ký tự cuối trước @
        $hidden = str_repeat("*", $length - 5); // Phần còn lại ẩn

        return $first . $hidden . $last . '@' . $domain;
    }

    private function obfuscate_phone($phone)
    {
        $length = strlen($phone);
        if ($length < 9) {
            return substr($phone, 0, 1) . str_repeat("**", max($length - 2, 1)) . substr($phone, -2);
        }

        $start = substr($phone, 0, 3);
        $end = substr($phone, -2);
        $hidden = str_repeat("*", $length - 5);

        return $start . $hidden . $end;
    }
}


$get_guest = new list_register();
echo $get_guest->render_html_table_rows();
