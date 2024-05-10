<?php 
class Contact {
    static function select($id=''){
        global $conn;
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }

    static function update($data=[]) {
        extract($data);
        global $conn;
        $sql = "UPDATE contact SET nomor = ?, owner = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssi', $nomor, $owner, $id);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        $conn->close();
        return $result;
    }

    static function delete($id='') {
        global $conn;
        $sql = "DELETE FROM contact WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }

}

?>