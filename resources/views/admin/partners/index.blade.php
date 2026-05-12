@extends('layouts.admin')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manajemen Partner</h2>
    </div>

    {{-- NOTIFIKASI --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-5 border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    {{-- FORM INPUT --}}
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">

        <h3 class="text-lg font-semibold mb-4">Tambah Partner Baru</h3>

        <form action="/admin/partners" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4 mb-4">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Partner
                    </label>

                    <input type="text"
                           name="name"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                           placeholder="Masukkan nama partner">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Logo URL
                    </label>

                    <input type="text"
                           name="logo_url"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                           value="https://placehold.co/200x200">
                </div>

            </div>

            <button type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded font-semibold hover:bg-indigo-700">
                Simpan Partner
            </button>

        </form>

    </div>

    {{-- TABLE PARTNER --}}
    <div class="overflow-x-auto">

        <table class="w-full bg-white rounded-lg shadow-sm border border-gray-200 text-left">

            <thead>
                <tr class="bg-gray-50 border-b border-gray-200">
                    <th class="p-4 font-semibold text-gray-600">Logo</th>
                    <th class="p-4 font-semibold text-gray-600">Nama Partner</th>
                    <th class="p-4 font-semibold text-gray-600">Logo URL</th>
                    <th class="p-4 font-semibold text-gray-600">Tanggal Dibuat</th>
                    <th class="p-4 font-semibold text-gray-600">Aksi Pilihan</th>
                </tr>
            </thead>

            <tbody>

                @foreach($partners as $partner)

                <tr class="border-b border-gray-100 hover:bg-gray-50">

                    <td class="p-4">
                        <img src="{{ $partner->logo_url }}"
                             class="w-16 h-16 rounded object-cover">
                    </td>

                    <td class="p-4 text-gray-800 font-medium">
                        {{ $partner->name }}
                    </td>

                    <td class="p-4 text-indigo-600">
                        {{ $partner->logo_url }}
                    </td>

                    <td class="p-4 text-gray-600">
                        {{ $partner->created_at->format('d M Y') }}
                    </td>

                    <td class="p-4 flex gap-2">

                        <a href="{{ route('admin.partners.edit', $partner->id) }}"
                           class="bg-blue-50 text-blue-600 border border-blue-200 px-3 py-1.5 rounded text-sm font-semibold hover:bg-blue-600 hover:text-white transition">
                           Edit Data
                        </a>

                        <form action="{{ route('admin.partners.destroy', $partner->id) }}"
                              method="POST"
                              onsubmit="return confirm('Anda yakin ingin menghapus partner ini?');">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="bg-red-100 text-red-600 border border-red-200 px-3 py-1.5 rounded text-sm font-semibold hover:bg-red-600 hover:text-white transition">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection