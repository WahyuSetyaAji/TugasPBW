class Barang extends Controller
{
    public function index($id)
    {
        return view('barang', [
            'isi data' => $id 
            ]);
    }

    @return

    public function create()
    {
        echo "ini fungsi create barang";
    }
}