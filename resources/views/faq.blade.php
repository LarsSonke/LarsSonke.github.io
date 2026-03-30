@extends('layouts.main')

@section('title', 'FAQ - Frequently Asked Questions')
@section('description', 'Common questions about studying at HZ University and using campus facilities')

@section('content')
<!-- Header -->
<div class="site-page-header site-page-header--faq">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="site-page-header-title">Frequently Asked Questions</h1>
        <p class="site-page-header-subtitle">Everything you need to know about studying at HZ University</p>
    </div>
</div>

<!-- Content -->
<div class="site-page-shell-narrow">
    
    <!-- FAQ Items -->
    <div class="space-y-6">
        <!-- Question 1 -->
        <div class="site-faq-item">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="site-faq-index flex-shrink-0 mt-1">
                        <span>1</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold site-text-heading mb-3">How can you print a document from your laptop at HZ?</h3>
                        <p class="site-text-body leading-relaxed">
                            You can send a print job to the printers in the school through <a href="https://print.hz.nl/login.cfm?dest=index.cfm&" target="_blank" class="site-link-inline">print.hz.nl</a>. Once you have done that, go to the printer and scan your HZ pass on the TouchID. After that press Print in the menu. If you have sufficient credit on your printing account it will succeed. Press Stop once you are done and you will be logged out.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Question 2 -->
        <div class="site-faq-item">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="site-faq-index flex-shrink-0 mt-1">
                        <span>2</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold site-text-heading mb-3">How can you scan a document and send it to your laptop at HZ?</h3>
                        <p class="site-text-body leading-relaxed">
                            Scanning is free but you need to have €0.07 credit. Next you need to use your HZ pass on the TouchID to register. After that select the option Scanning - Scan, lay the document you want to scan on the feeder or glass plate. Press Scan and Send, then press Scan to me, press Yes after that press start. Last of all press Stop once you are done and you will be logged out.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Question 3 -->
        <div class="site-faq-item">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="site-faq-index flex-shrink-0 mt-1">
                        <span>3</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold site-text-heading mb-3">What do you need to do when you are sick / show symptoms of coronavirus?</h3>
                        <p class="site-text-body leading-relaxed">
                            You should message one of your teachers and let them know, that way you might be able to follow the lesson online.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Question 4 -->
        <div class="site-faq-item">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="site-faq-index flex-shrink-0 mt-1">
                        <span>4</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold site-text-heading mb-3">How can you book a project space in one of the wings?</h3>
                        <p class="site-text-body leading-relaxed">
                            Go to <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=bbe9a4bc-42b9-4e92-9e56-da44fdcde8d2" target="_blank" class="site-link-inline">Reserve location</a> and select a location, after that go to Select additional services and lastly press Confirm reservation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Question 5 -->
        <div class="site-faq-item">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="site-faq-index flex-shrink-0 mt-1">
                        <span>5</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold site-text-heading mb-3">What are the instructions if you want to park your car at the HZ parking lot?</h3>
                        <p class="site-text-body leading-relaxed">
                            There is a free parking lot at Poelendaelesingel 10 in Middelburg. You need to scan your HZ pass at the card reader this way the gates will open and you can enter. Same goes for leaving the parking lot, you need to scan your HZ pass at the card reader when you want to leave and then the gates will open again.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection