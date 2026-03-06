@extends('layouts.main')

@section('title', 'FAQ - Frequently Asked Questions')
@section('description', 'Common questions about studying at HZ University and using campus facilities')

@section('breadcrumb')
    <span>/</span>
    <span class="text-gray-400">FAQ</span>
@endsection

@section('content')
<!-- Header -->
<div class="bg-gradient-to-r from-green-600/20 via-blue-600/20 to-teal-600/20 border-b border-gray-800 backdrop-blur-sm text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-green-400 to-blue-400 bg-clip-text text-transparent">Frequently Asked Questions</h1>
        <p class="text-xl text-gray-300">Everything you need to know about studying at HZ University</p>
    </div>
</div>

<!-- Content -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- FAQ Items -->
    <div class="space-y-6">
        <!-- Question 1 -->
        <div class="bg-gray-800/50 border border-blue-500/30 backdrop-blur-sm rounded-lg overflow-hidden hover:border-blue-400/50 transition-all">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-blue-400 font-bold">1</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-100 mb-3">How can you print a document from your laptop at HZ?</h3>
                        <p class="text-gray-300 leading-relaxed">
                            You can send a print job to the printers in the school through <a href="https://print.hz.nl/login.cfm?dest=index.cfm&" target="_blank" class="text-blue-400 hover:text-blue-300 underline">print.hz.nl</a>. Once you have done that, go to the printer and scan your HZ pass on the TouchID. After that press Print in the menu. If you have sufficient credit on your printing account it will succeed. Press Stop once you are done and you will be logged out.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Question 2 -->
        <div class="bg-gray-800/50 border border-purple-500/30 backdrop-blur-sm rounded-lg overflow-hidden hover:border-purple-400/50 transition-all">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-purple-400 font-bold">2</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-100 mb-3">How can you scan a document and send it to your laptop at HZ?</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Scanning is free but you need to have €0.07 credit. Next you need to use your HZ pass on the TouchID to register. After that select the option Scanning - Scan, lay the document you want to scan on the feeder or glass plate. Press Scan and Send, then press Scan to me, press Yes after that press start. Last of all press Stop once you are done and you will be logged out.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Question 3 -->
        <div class="bg-gray-800/50 border border-green-500/30 backdrop-blur-sm rounded-lg overflow-hidden hover:border-green-400/50 transition-all">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-green-400 font-bold">3</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-100 mb-3">What do you need to do when you are sick / show symptoms of coronavirus?</h3>
                        <p class="text-gray-300 leading-relaxed">
                            You should message one of your teachers and let them know, that way you might be able to follow the lesson online.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Question 4 -->
        <div class="bg-gray-800/50 border border-yellow-500/30 backdrop-blur-sm rounded-lg overflow-hidden hover:border-yellow-400/50 transition-all">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 bg-yellow-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-yellow-400 font-bold">4</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-100 mb-3">How can you book a project space in one of the wings?</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Go to <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=bbe9a4bc-42b9-4e92-9e56-da44fdcde8d2" target="_blank" class="text-blue-400 hover:text-blue-300 underline">Reserve location</a> and select a location, after that go to Select additional services and lastly press Confirm reservation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Question 5 -->
        <div class="bg-gray-800/50 border border-indigo-500/30 backdrop-blur-sm rounded-lg overflow-hidden hover:border-indigo-400/50 transition-all">
            <div class="p-6">
                <div class="flex items-start space-x-4">
                    <div class="w-8 h-8 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-indigo-400 font-bold">5</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-100 mb-3">What are the instructions if you want to park your car at the HZ parking lot?</h3>
                        <p class="text-gray-300 leading-relaxed">
                            There is a free parking lot at Poelendaelesingel 10 in Middelburg. You need to scan your HZ pass at the card reader this way the gates will open and you can enter. Same goes for leaving the parking lot, you need to scan your HZ pass at the card reader when you want to leave and then the gates will open again.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection