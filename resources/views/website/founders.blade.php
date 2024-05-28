<x-layout>
    <x-slot:title>
        Company Founders | HH Sharker
    </x-slot:title>

    <div id="founders">
        <!-- founders images, names & titels -->
        <section class="container py-5">
            <div class="text-center">
                <x-tag class="figure">Founders</x-tag>
                
                <x-section-header class="mt-3">Company founders</x-section-header>
            </div>
            <div class="row justify-content-center align-items-center mx-3">
                <x-founder-card name="Hassan Shaker" title="CEO H&H Shaker">
                    <img src="{{ asset('assets-website/images/unknown.jpg') }}" class="img-fluid rounded-4" alt="img">
                </x-founder-card>
                <x-founder-card name="Hussain Shaker" title="CHAIRMAN">
                    <img src="{{ asset('assets-website/images/unknown.jpg') }}" class="img-fluid rounded-4" alt="img">
                </x-founder-card>
            </div>
        </section>

        <!-- img section separator -->
        <x-divider />

        <!-- Founder's words -->
        <section class="container py-5">
            <div class="row">
                <div class="col-md-4 col-12">
                    <x-section-header>Founders</x-section-header>
                </div>
                
                <div class="col-md-8 col-12 essay">
                    <p class="info-text">
                        Hussein & Al-Hassan G. Shaker Bros. Modern Trading Co. LTD., was established as a true representation of a long history and a distinguished reputation held by the Shaker family. Since its establishment in 1950 by Sheikh Ibrahim Shaker.
                    </p>                        
                    <p class="info-text">
                        The HH Shaker Company has been and continues to pioneer the air conditioning and home appliances industry in the Kingdom of Saudi Arabia. It is also the exclusive importer and distributor of many leading international brands, including Midea and Beko.
                    </p>
                    <p class="info-text">
                        Thanks to its founders, the company has maintained its growing path at a steady and clear pace over the years, until it has become a distinguished brand and a prominent address in marketing home appliances and air conditioners. It is famous for providing services at the highest levels of quality and efficiency in the Kingdom.
                    </p>
                    <p class="info-text">
                        Thanks to its success and distinction, Shaker Group listed the company's shares in the Saudi market to achieve further growth and expansion. 
                        The Shaker group includes a strong network of branches, service centers, and exclusive sales outlets, including modern retail through specialized retail partners.
                    </p>
                    <p class="info-text">
                        Hence, HUSSEIN & AL-HASSAN G. SHAKER BROS is considered a leading and innovative group in the home appliances and air conditioning solutions market, constantly keen to serve consumers with the highest quality and satisfaction standards.
                    </p>
                </div>
            </div>
        </section>
    </div>
</x-layout>
