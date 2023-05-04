const SortingSampah = () => {
    return (
        <>
            <div class="container  mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Sorting Sampah</h2>

                        <form method="post" action="/SortingSampah">
                            <div class="mb-3 mt-5">
                                <label for="namaSampah" class="form-label">Masukkan Nama Sampah</label>
                                <input type="text" class="form-control" id="namaSampah" name="namaSampah" required />
                            </div>

                            <button type="submit" class="btn btn-primary">Cari Jenis Sampah</button>
                        </form>
                    </div>
                </div>
            </div>
        </>
    )
}

export default SortingSampah