<x-layout>
    <div class="flex flex-col justify-center items-center pl-10 pr-10">
        <h1 class="text-2xl">Latest Sneezes</h1>
        @if (count($sneezes) == 0)
        <p class="color-red font-bold p-2">You have no sneezes!</p>
        @else
        <table class="table-fixed border-2 p-2">
            <thead class="border-2 p-2">
                <tr class="border-2 p-2">
                    <th class="border-2 p-2">ID</th>
                    <th class="border-2 p-2">Timestamp</th>
                    <th class="border-2 p-2">Latitude</th>
                    <th class="border-2 p-2">Longitude</th>
                    <th class="border-2 p-2">Sneezes</th>
                    <th class="border-2 p-2">Indoors/Outdoors</th>
                </tr>
            </thead>
            <tbody class="border-2 p-2">
                @foreach ($sneezes as $sneeze)
                <tr class="border-2">
                    <td class="border-2 p-2">{{$sneeze->id}}</td>
                    <td class="border-2 p-2">{{$sneeze->created_at}}</td>
                    <td class="border-2 p-2">{{$sneeze->latitude}}</td>
                    <td class="border-2 p-2">{{$sneeze->longitude}}</td>
                    <td class="border-2 p-2">{{$sneeze->count}}</td>
                    @if ($sneeze->is_outdoors)
                    <td class="border-2 p-2">Outdoors</td>
                    @else
                    <td class="border-2 p-2">Indoors</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</x-layout>
