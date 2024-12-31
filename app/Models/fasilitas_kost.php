<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\SoftDeletes;
    class fasilitas_kost extends Model
    {
        use HasFactory, SoftDeletes;

        protected $table = 'fasilitas_kost';

        protected $fillable = [
            'name',
            'description',
            'kamar__kost_id'
        ]; 
        
        public function Kamar_Kost()
        {
            return $this->belongsTo(Kamar_Kost::class);
        }
        public function relatedModel()
    {
        return $this->belongsTo(RelatedModel::class);
    }
        public function kategoriKost()
        {
            return $this->belongsTo(KategoriKost::class, 'kamar__kost_id');
        }
        public function fasilitas_Kost()
    {
        return $this->hasMany(FasilitasKost::class, 'kamar__kost_id');
    }

    }