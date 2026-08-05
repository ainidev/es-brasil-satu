@if(isset($promo) && $promo)
    <!-- ========================================== -->
    <!--  MODAL PROMO (WHITE BLUR OVERLAY)          -->
    <!-- ========================================== -->
    <div id="promoModal" 
         onclick="closePromoModal()" 
         style="position: fixed; inset: 0; width: 100vw; height: 100vh; z-index: 9999999; background-color: rgba(255, 255, 255, 0.4); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; padding: 20px; cursor: pointer; animation: fadeIn 0.3s ease-out;">
        
        <!-- Card Container Utama -->
        <div onclick="event.stopPropagation()" 
             style="position: relative; max-width: 440px; width: 100%; background: #ffffff; border-radius: 24px; padding: 20px 20px 16px 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15); text-align: center; cursor: default; transform: translateY(0); transition: all 0.3s ease; border: 1px solid rgba(0, 0, 0, 0.05);">
            
            <!-- Tombol Silang Close Modern -->
            <button type="button" 
                    onclick="closePromoModal()" 
                    title="Tutup Modal"
                    style="position: absolute; top: 12px; right: 12px; background-color: #f3f4f6; color: #374151; border: none; width: 36px; height: 36px; border-radius: 50%; font-weight: bold; font-size: 16px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s; z-index: 10;"
                    onmouseover="this.style.backgroundColor='#dc2626'; this.style.color='#ffffff';"
                    onmouseout="this.style.backgroundColor='#f3f4f6'; this.style.color='#374151';">
                ✕
            </button>
            
            <!-- Badge Promo -->
            <div style="display: inline-block; background-color: #fee2e2; color: #dc2626; font-size: 12px; font-weight: 700; padding: 4px 12px; border-radius: 20px; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">
                🎉 Promo Spesial
            </div>

            <!-- Judul Promo dari Database -->
            @if(isset($promo->title) && $promo->title)
                <h3 style="margin: 0 0 12px 0; color: #111827; font-size: 20px; font-weight: 800; line-height: 1.3; padding: 0 24px;">
                    {{ $promo->title }}
                </h3>
            @endif
            
            <!-- Gambar Promo -->
            <div style="overflow: hidden; border-radius: 16px; border: 1px solid #f3f4f6;">
                <img src="{{ asset('storage/' . $promo->image) }}" 
                     alt="{{ $promo->title ?? 'Promo Es Brasil' }}" 
                     style="width: 100%; height: auto; max-height: 400px; object-fit: cover; display: block; transition: transform 0.3s ease;"
                     onmouseover="this.style.transform='scale(1.02)';"
                     onmouseout="this.style.transform='scale(1)';" />
            </div>

            <!-- Deskripsi Promo (Jika Ada) -->
            @if(isset($promo->description) && $promo->description)
                <p style="margin: 12px 0 0 0; color: #4b5563; font-size: 14px; line-height: 1.5;">
                    {{ $promo->description }}
                </p>
            @endif
        </div>
    </div>

    <!-- Animation CSS & JS isolasi -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>

    <script>
        function closePromoModal() {
            const modal = document.getElementById('promoModal');
            if (modal) {
                modal.style.opacity = '0';
                modal.style.transition = 'opacity 0.2s ease';
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 200);
            }
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closePromoModal();
            }
        });
    </script>
@endif 