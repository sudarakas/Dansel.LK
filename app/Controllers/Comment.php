<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CommentModel as CommentModel;

class Comment extends BaseController
{
    public function storeComment($id)
    {
        //echo "route is working";
        helper(['form', 'url']);
        helper('alerts');
        $comment = new CommentModel();
  
        if (!$this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|min_length[3]|max_length[1000]',
            'comment' => 'required|min_length[3]|max_length[1000]',
            
        ])) {
            return view('/', [
                'validation' => $this->validator,
            ]);
        } else {

            $comment->save([
                'dansel_id' => $this->request->getVar('id'),
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'comment' => $this->request->getVar('comment'),
            ]);

            alert('success', "Your comment was posted successfully.!");
            return redirect()->to('/');
        }

    }

    public function showComment($id){
        $db  = \Config\Database::connect();
        /*$comment = $db->table('feedback')->where('id', $id)->get();
        $comment = $comment->getResult();*/
        $resultSet =  $this->db->query("select * from feedback WHERE id=$id"); 
        $queryCount = count($resultSet );
        return view('dansel/view',['data'=>$queryCount]);
    }
}
