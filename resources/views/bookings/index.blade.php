<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                @if($myBookings->isNotEmpty())
                    <h2 class="mb-3 text-lg md:text-xl font-semibold text-gray-800">Ваши бронирования</h2>
                    @foreach($myBookings as $booking)
                        <x-bookings.booking-card class="mb-4" :booking="$booking" :show-link="true"/>
                    @endforeach
                @else
                    <h2 class="text-lg md:text-xl font-semibold text-gray-800">У вас нет бронирований</h2>
                @endif
                @if($otherBookings->isNotEmpty())
                <h2 class="mb-3 text-lg md:text-xl font-semibold text-gray-800">Остальные бронирования</h2>
                    @foreach($otherBookings as $booking)
                        <x-bookings.booking-card class="mb-4" :booking="$booking" :show-link="true"/>
                    @endforeach
                @else
                    <h2 class="text-lg md:text-xl font-semibold text-gray-800">Нет бронирований</h2>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
