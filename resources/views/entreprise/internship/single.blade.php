@php
   $offer_ref = $offer->translation->where('locale',app()->getLocale())->first();
        $offer_ref->softwares = json_decode($offer_ref->softwares );
        $offer_ref->others = json_decode($offer_ref->others );
@endphp

<x-commons.navigation :page="$offer_ref->name"></x-commons.navigation>
<main id="content">
    <div class="flex items-center px-10 xl:px-32 lg:px-16 2xl:px-48 mt-20">
        <a href="/{{app()->getLocale()}}/entreprise/internship" class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl">
            {{__('agency.offer_link')}}
        </a>
        <svg class="h-7 w-7 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 6 15 12 9 18" /></svg>
        <a href="/{{app()->getLocale()}}/entreprise/internship/{{$offer_ref->slug}}" class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl">
            {{$offer_ref->name}}
        </a>
    </div>
    <section class="xl:px-32 2xl:px-48 px-10 mt-20 mb-20 xl:mb-40" aria-labelledby="{{$offer_ref->slug}}">
        <div class="flex md:flex-row flex-col justify-between mb-8">
            <h2 id="{{$offer_ref->slug}}" role="heading" aria-level="2"
                class="xl:text-4xl md:text-3xl text-2xl text-yellow-800 uppercase font-extrabold font-sans mb-4 xl:mb-20">{{$offer_ref->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/entreprise/internship">{{__('agency.offer_back')}}</a>
        </div>
        <div class="flex md:flex-row flex-col md:gap-x-10">
            <div class="flex flex-col gap-16">
                <article class="xl:even:mt-36 relative xl:mt-48" aria-labelledby="{{$offer->partner->translation->where('locale',app()->getLocale())->first()->slug}}">
                    <img class="rounded-lg xl:absolute -z-10 xl:bottom-36" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAXcAAAF3CAYAAABewAv+AAAAAXNSR0IArs4c6QAAH2lJREFUeF7t3Yey5LYRhWGuo+QoOecoW3JO7/8GjpJztiTnnLPl6muPPZeLGYIkyAHAj1VbUu0SQPffzQOwCXIefPazn31hcCCAAAJNEHgwDAPJygnVA+Keg8k5CKwjQJLW8dN6PgHiPpeZq3Quse7PlxLdh7hJB4l7k2FjNAIIIHCdAHGXIQgggECHBIh7h0Hl0hwCiipzaDm3HQLEvZ1YsRSBigiYFCsKRtIU4l57hNiHAAIILCBA3BdA0wQBBBConcBNxN0NXe1pwT4EEGidwE3EvXVoOfabwHIoOQeB+gm0ei0T9/pzq0ILW033ClEyCYGNCIzE3UW7EWfdIoAAArsSsHLfFbfBEDgjYC21WzocETVx3y29DFQbgSNe8LXFgD3bESDu27HVc4sEKH6LUWNzggBxlxbLCBDBZdy0QmAnAsR9J9CGQQABBPYkQNwnaVuiTiJyAgIIXCFwGw0h7h0k5W1SpwNwXECgYwLEvePgcg0BBI5LgLgfN/Y8RwCBjgkQ946DyzUEqiJQsH5YsKuqEJU0hriXpKkvBBC4I0B8b58IxP32MWABAgggMJPA9PRJ3DORTqPM7MhpCCCAwA4EiPsOkA2BAAII7E2AuO9N3HgIIIDADgSI+w6QDYEAAgjsTYC4703ceAgggMAOBNaLuyeNO4SphiEEuoYosAGBXALrxd2e1lzWzkMAAQR2I1BE3Hez1kAIIIAAAlkEiHsWpryTFC7yODkLAQS2J0Dct2dsBAQQQGB3AsR9d+QGRAABBAoQmCgVEPcCjA/fhXrU4VMAgPoIEPf6YsIiBBBAYDUB4r4aoQ4QQACB+ggQ9/pi8l+L1DqqDU1VhsmTqsJR3Jjl8SXuxYOhQwQQQOD2BIj77WPAAgQQQKA4AeJeHKkOEeiVwPISQa9EavaLuNccHbYhgEDTBG45HRL3plOH8QgggECaAHGXGQcncMu11cHRc39TAsQ9B6/rP4eScxBAoCICxD0nGMQ9h5JzEECgIgLEvaJg3MIU89YtqB9lTNl1y0hXKO4S4pYJUeXYUqLKsDBqQwIFcr5Ccd8QmK4RQACBgxAg7gcJNDcRQOBYBIj7reJd4LbrVqYbFwEE6idA3OuPEQuPRsDEf7SIb+Ivcd8Eq04RQACB2xIoK+5WHLeNZqnRxbEUSf0gcDMCZcX9Zm4YGAEEEEDgnABxlw8IIIBAhwSI+5Wgqk50mPFcQuAgBIj7QQLNTQQ2JWAltCneJZ0T9yXUtEEAAQQqJ0DcKw8Q8xBAAIElBIj7EmraIIAAApUTIO6VB2h/8xRP92duRATKEyDu5ZnqEQEEVhCwvFgB76xpo+Iu/GXCr5f7BORV9xlxoBA3Ku7dpyAHEUAAgVUEiPsqfBoPw4GWQsKNQEMEiHtDwWIqAgggkEuAuOeSch4CCBQl4J6vKM6HOiPu2/JVtdiar/4RQCBJgLhLDAQQQKBCAmvvbIh7hUFlEgLHJLBWzkpQq8GGEn4MA3Evw1EvCCBQGYF+ZHoZWOK+jJtWCCCAQNUEiHvV4WEcAgggsIwAcV/GTSsEEECgagLEverwMA4BBBBYRoC4L+OmFQIIIFA1AeJedXjOjDv6o/9W4sROBCohcChxp4+VZB0zEEBgcwKHEvfNaRoAAQQQqIQAca8kEMxAAAEEShIg7iVp6utgBP5T6FPuO1jYG3F3vbjL7EZCzUwElhPo6TLvyZdrEV0v7svzRUsEmiVwFIFoNkAM9+GwKnKAUlQRBkYg0BMBK/cbRpOm3xC+oQ9F4IjXGnE/VIr37ewRL+C+I8q7NQT+J+4ujDUYtUUAAQTqImDlXlc8WIMAAggUIZAp7lus67foswgTnSCAAALNE8gU9+b95AACCCBwKALE/VDh5iwCZQm4/y7Ls2RvxL0kTX0hgAAClRAg7pUEghkIIIBASQLEvSRNfSGAAAKVECDulQSCGQgggEBJAsS9JE19IYAAApUQIO6VBIIZCCDQE4Fb7SP6/7jEvad84gsCnRG4lUT2gJG49xDFTn1wYXcaWG7tQoC474LZIAgggMC+BIj7vryNhkD/BNxyVRHjK+IuQlVEiBHHJuAyPHb8V3hv5b4CnqYIIIDArgRmTPbEfdfIGAwBBDYjMEP4NrOhoo6Je0XBYAoCCCBQigBxL0VSPwiMCFhIVp4SnQeIuFeef8xDAAEElhAg7guodT7hLyCiyTEIyPyW4kzcW4oWWxFAAIFMAsQ9E5TTEEAAgZYIEPeWosVWBBC4TEDV6B4b4u5iQQABBDokQNw7DCqXEEAAAeIuBxBAAIEOCRD3DoPKJQQQQIC4ywEEEECgQwIHFHeP1DvMYy6VIODSKEGxmj4OKO7VsGdIECAo8gCBTQgQ902w6hQBBA5JoKLFCnE/ZAZyGgEEeiewg7hXNJX1Hk3+IYAAAv8lsIO4Y40AAgggsDcB4r43ceMhgAACOxAg7jtANgQCCHRGoIFqM3FvJecaSKZWULITgSMQIO5HiDIfEdiagMXH1oRn99+BuMuq2VHXAAEEuiMwVsIOxL2VGJmEWokUOxHogQBx7yGKrflgnqsqYsJRVTiKGUPci6HUEQInAuRSLjxMYO+sIO6yEAEEEOiQAHHvMKhcQgABBIi7HEAAAQQ6JEDcOwwqlxBAAAHiLgcQQACBDgkQ9w6DyiUEEECAuMsBBBBAoEMCxL3DoHIJAQQQIO5yAAEEEOiQAHHvMKhcQgABBIi7HEAAAQQ6JEDcOwwqlxBAAAHiLgcQQACBDgkQ9w6DyiUEEECAuMsBBBBAoEMCxL3DoHIJAQQQIO5yAIFhGPb+IQXQEdiaAHHfmrD+EUAAgRsQOKy4W6ndINsMeTACrrJbBvyw4n5L6MZGAAEEtibQhLib/7dOA/0jgEBvBJoQ996g8wcBBBDYmgBx35rwDft3x3ND+LUNLRlqi8jm9hD3zREbAAEE8giYgfI45Z1F3PM4OQsBBBBoigBxbypcjEUAAQTyCBD3PE7OQgCBIxJouFJE3I+YsHxGAIHuCRD37kO8g4OzVjezTt7BeEMg0CeBPsSdXvSZnbxCAIHFBJaJOzFdDFxDBBBolEBjurdM3BuNDbMRQACBoxAg7keJND8RQOBQBIj7ocLN2b4JNFY36DsYN/eOuN88BAwoS4DAleWpt1YJEPdWI8duBBBA4AoB4i49diBgNb0D5PVDCNN6hhX1QNwrCgZTEEAAgVIEiHspkjv08/hjjw2PPPro8PKXv3x40YteNPz1r38d/vSnP939if931EUgYvS6173uLl4ve9nLhhdeeGH4y1/+Mvz5z3++i9nf//73ugxmTVcEiHvl4QyBeP/73z+8+tWvHh48iPvm9BHC8bOf/Wz44Q9/eCciqePjH//48NKXvrSYx1/72tfuROr8+NCHPjS84hWvWDTGL37xi+EHP/jBorY1NXr00UeH9773vUP899rxj3/8Y3j++eeHX/7yl8nTIt6f/vSni7kWefH5z3/+of4+9alP3S0Wlhzf/OY3h9///vdLmmqzMQHivjHgNd2/8pWvHD74wQ/OuvDiAv7Wt76VvOA++clPDi9+8YvXmHSv7Te+8Y3hD3/4w72/+8QnPjG85CUvWTTGr371q+F73/veora1NHrTm940vPOd75xlTqzgv/KVrwz//Oc/77UrLe7R+ec+97l7Y4Soh7gvPb7zne8Mv/nNb5Y2125DAsR9Q7hrug4RjpX2khXVv/71r+Hpp59+SCz2EPdYaV67w7jGpHVxf81rXjN84AMfWBT2KNeEwJ8fe4j7q171quHJJ59cZHM0Iu6L0W3ekLhvjnjZAE899dQQK/fxcaqz//GPf7wrsbz2ta8dHnnkkYfOi7ruV7/61WKr6pQXIUYhSqcjJqSYQJYeUVZ67rnnlja/ebtUeeNUZ494BauI1eOPP568g/rpT396V6Y5HaXFPSb9L3zhC/c4vfnNbx7e8Y53LGIXvkVZZnz3tqgzjYoTIO7Fka7v8JJIRrnld7/73UMDhMA/8cQTD/191FfP6+9xF7BkVR214/Hq7sc//vHwox/96N6YYzt+/etfD9/97nfXA2mgh9e//vXDe97znnuWRpklJsDUg9MQ1BDW8yPOizuu82NpzKI89La3ve1eX6n6eNgctp+OiFfEzXF7Amt3phL328fwIQtSF/7Xv/71IVZ/l443vvGNw7ve9a57/5yqic91N8QlykPntfrf/va3w7e//e2HunrrW996T1Di4e5PfvKTuUM2ef6HP/zhew9QQ9ifeeaZh0pj585FCSdKOefHuCa+BEY80I4H2+dHPKiOB9bjY3yHGJOLXTxLqNfXhrjXFpMHw/DUk/dLMrEjJXamTB2f+cxn7p2SWl1P9TF18ccOjxCA1I6c973vfXclh9Ox106KuBsZlxbCvms7h8LGmLje/va33/kSJYv479/+9reLu1eusRuXZGJSi/GvHbEDKh6Ynx9f/vKXV21rTT2ruTQZx7jjHVQlJpe5Oeb8bQgQ9224rur1Yx/72N2+6NORK9Jjgfn5z38+PPvss4ttGa/Eo6Nxnf288/HqdVwWWmzIRMMQ6dilM374PPWANrVyjrujuEuae4wn1hyRjhhHrM+PqTu0KbvGK/Frk3H0df4APM790pe+NDWEf2+EAHGvMFDjXS05ddDYfhgCd35cuhXPcTke1saq7vyYWo2eb4O8tKc6Z+wl5zz22GN37wOMj0timXpOETaHuI23JE7Zk9pOmLMCTm2bjAeecRex5IgXpmJ/fe5kMX5gm3uHuMQ2bfYnQNz3Zz45YuySOV+5x2311AUfe6tDLM6Pa6vsKSPGLyOF4H3xi1+82ux8FRjljag5x6QT5Yf4EztF4u9jdRwPhku/VRsPlUO0z4/UavTSSj9nEr0EIMY93TlErCJmU8dHPvKRezud1kyIKZ/i5aIojV06Is9ipX86Tnc68UZtPAuIbZIxyccun+gr/gRPRxsEiPuCOK19ir1gyKtN4kFqPFA9P1L7pnPHTe38iJeL4uK/dIx3+MRDuVgZXnuhKUQwykaX3tDMtfd0XowXdw/jF7XG5anUJHCtLj3Xjqnzw84oYY23sK4po8VdS9y9nB9TD0fHdw6xco+dUdd2VEVc42H6+M3kKZ/9+/4EiPv+zFeNGA8OQ7xiZR8XYojn+GKMFWCUI5ZcgNFXlIXO69exwo4a8rVjzQs8sSc/tnmW2KWRekgZdsee/xgnZWfclUQ55tJnG9YELGIVd1XRd8QrVsWpCW+qNn7NhvEKPM7N+ZTDeBvkHD9jov/+97+/CbM5djj3MgHi3lh2TL0BGgIZwh7ljyVH6i4g9Q2Zcd9vectb7naeLD3WiNt4zJRoBZcoE6VW9iW2jF7yOyW843OjRBWr4aWTy7i8E3dEUUKb6u/Si3K5MQy7Y1Le96jtvnlf7+eMRtzn0Krg3ClxDxOjNhoX3dTFPXYnVuuxaj+/E5iq2576ON8GGZ8tO33i7FRjj7JH2BN13Hjwl/rGTXyjJF5nL3GkvnETojfeUbOmFJJjZ464nz76dv52ak7fcU7qTiTe8o23faeOSx+SO9XYQ7yj5h4xiy2uqXJNrN5LldWm7PXv8wgQ93m8bn52jriHkSGq8UB16kHsuUOpFW+UK3IeoqW+BnlNZFIPgMOWWMHmPIycCkTqRZ5xm9QboVP9zv33HDtOfS55o3e8bXaOT+Ncikkm7mJSL8vFZBxbR8efxIg2UdvPyZG57Jy/jgBxX8dv99ZRr43VZ9Tc44FcXGyxEk59YGzOSjj1yYOpfeLnzkc5J+rdp9fl40Hp1NcCY9te2H5+lLzVvzSBnMbL2YteIsCx+g0uUW+PmMXOmkufcJ56cH1uT2r755wPecULVGFbxD4WAbGzZqqcN55Mwp41W25L8NVHmgBx7yQzUi8chWu5K++UEE7ttiiBbrynf87KM2f8S6WHW38aIUocIa5R8jg/5vg/rrXnbFfNYXbtnJigPvrRj947Zc4iYO342ucTIO75rKo/c/z6/5xV1fjt1r1eaBm/Jbpmr3cqQCFEIUjjo4bVZgh8rITHP6CS82ZvSmRz32Rem8jjCXnNttu1tmh/mQBxryw7xnvD43Y5943J1AWf88AwHpbFxHB+XPoCZWlcscMmdtqcHznilmPHpbuZaFuyVhxljfOyWMQr91lHysacTxCkJvJS3KbYpj6SNvWC21Sf/r08AeJenumqHscX7Zzb9Bh4/I2TnLp7aivd+Lvfq5y60ngs7qVW7qmJbmxG6pv3S/wcl37mPBhN7cvP2YEyfhi69Js4S/wdPzy3cl9Ccfs2xH17xrNGGH/ud67YjcV96nswqe+izBGncC4E+vzTtdE+91O/47LM5MerMrc5px78pQIR2w/jRzLWHOOV7JxJIyXuU/vuU3dacz+dENzPX6YKDrm/hTreZpqzgFjDd6ptZkpMddPdvxP3ykKa2gGR+42Y2IkRq/A55ZXUx6tyXlo6HyMeDIZInY7UL/6kMKfehi2xAk09HI5+4yHq+BO7YVe83DS1S+RamozvtnL9P02M47LU1EfHxrznLgBi3HHdPH5NKSaVqSO1tTN+tCXq/Y66CBD3uuJxt5oaf90xd2U0XkGGa1N12PEt9hKhSE0QU6vPsC0lwmsfCqbE57y+nvoGS87nFa6lSeqn6nK2NKa+vX5Xhnvm6WGIN8EuHOOSzJKH30sniHEJL0w8fdqhskupgDlt3xMQ9wIpULqL1Pa98e9rjsdM7RnPqdeXEIrUHvlYvYbAX/q+zRve8Ibh3e9+9z035qx4LzFPvZl6Xnq59HGxqfLVtRinJuSYUKJUcmmvfzCL1//HHw+bKomlftB6yYSY+uWumOTiru3SA/zUS265K/7S14j+pgkQ92lGu59x6eNXUVqIPcXxok88xIoPUUWtO3ZcpF7nn1pRpVa5S4QiAKVWdPH3sVsnBC7quSGs4VsIy/jTvHFuzoPEa8FIiU/qYd+lj5xN8bo2duqbPHF+iHW8cRsxi+cJ8dJZ1MyDwYP4SMPpOw3DcLfDJt5LuLbTptSnnSNfYiIcf1IghD0WEmFzTMyxTfOUY6ktpXu8C7H7BdjJgMS90kCmXuefY+rUSj/6ih9Qjonh/Jhbbz+1DbGIh5ipSSbH7rU7Li5NiJfeQk2VZ3LudC75knp+kOP3+Tk5P0tYoox2GjN1FzDH5pxttnP6c25ZAsS9LM9ivYVIRl00Vtdzj9w3BsdfBVxSbz+3LUoMUfe/9j3wlC+59l4T1tTXHq9NcJfEOOdTuZfsiFiNd6HkxC64R+ko52Nf45fN1k6KqfJMjs25HyfL6cs52xAg7ttwLdZr6mHdpc7jQo9vi8R/c45xbf/060k5bS+dE1sro0QR34yZEvkoP0Rdeu2HwsbbR8O2nFV46qf2ou2an7oLn+P5x/kPhV/jGb7Hw9fcF9XGW13ji4xRzlpzRLklSlrjTyGk+owciTuM0r+itcZ+bf/7GdbRQ3ji3kBmxAO7qHtGvfb0gw8hIiFgcZFFbTRq2qmv+d3KvbjziF90CptjRR8+hL0x8cRDuPiTOwndyoc1455+qi5W8xGz088mhjjGPviI2RY/NbjG5ohTTEphc/x/TNSRX2HvKWYlflBljY3a5hMg7vmsnInAYgJtb6pb7LaGNyRA3G8I39AIIIDAVgSI+1Zk9YtAIwTcVTQSqJlmEveZwJyOAAIItEBgO3G3HGgh/p3bKAmLBxjS4ki36nA7cd/KYv0igAACCEwSIO6TiJzQFgFLy7bixdqtCBD3rcjqFwEEELghgebE3brshtliaAQQaIZAc+LeDFmGziRg2p4JzOljAlLoHhHi7hJBAAEEOiSws7jfamq91bgdZgyXEECgCQI7i3sTTBhZLYEjT9KXfD8yk2oTtQrDiHsVYWAEAgggUJYAcS/LU28IIIBAFQSIexVhYAQCCCBQlkDf4v6/cqS6ZNm00RsCCNROoG9xr50+++omYE1Qd3xYd5UAcZcgCCCAQIcEiHuHQa3VpRoWwjXYUGt82NUwgURiE/eG48l0BNonYLrdKobEfSuyB+jXZXmAIHOxWQLEvdnQMRwBBBC4TKBpcbdylNoIIIBAmkDT4i6oCOQTsBTIZ7XsTISXcduqFXFfQ1Y2r6GnbccEXBq3Dy5xv30MWDCHANWYQ8u5ByZA3A8cfK4jgEC/BIh7v7FtzzOr8vZixuJqCRD3akPDMAQQQGA5AeK+nJ2WCCCQIuAOrIq82EfcBbuKYDMCAQSOQ2AfcT8OT54igAACVRAg7lWEgREIIIBAWQLEvSxPvSGwgIC65QJomkwQIO5SBAEEEOiQAHHvMKhcQgABBIi7HEAAAQQ6JEDcOwwqlxDomoBHFFnhJe5ZmJyEAAIItEWAuLcVL9YigECjBPa+4SDujSYKsxFAAIFrBIi7/EAAgQ4I7L0urh8Zca8/RixEAAEEZhMg7rORafAQAYumjZIC2I3AHqLbPsTdNXCIZOUkAgjkE+hD3PP9dSYCCCBwCALE/RBh5iQCCFwl0OHdP3GX8wgggECHBIh7h0HlEgK7E+hw5bs7w8IDEvfCQHWHAAItE+hnlqpf3Pth3XLGsx0BBBojUL+4NwaUuZcJtDhPt2izHEQgCBB3eYAAAgh0SIC4dxhULiGAAALEXQ4ggAACHRIg7h0GtXeXDlUHP5SzvWfuvv4R9315Gw0BBBDYhQBx3wWzQRBAYA8CbnT+T5m475FxxtiRgMt7R9iGqpgAca84OExDAAEElhIg7kvJaYcAAghUTIC4FwmOUkARjDpBAIFiBIh7MZQ6QqBHAhYurUaVuLcauRV2u1xXwNMUgUYIEPcaAkVta4gCGxDoigBx7yqcnEEAAQT+Q4C4T2aCZfUkIicggMD+BCakibjvHxIjIlAtAUuZakMz2zDiPhuZBsNAAmQBArUTIO61R4h9CCCAwAICxH0BNE0QQACB2gkQ99ojxD4EEEBgAQHivgCaJggggEDtBIh77RFiHwIIILCAAHFfAE0TBBBAoHYCHYu77Xq1J19f9sm3vuLZvjcdi3v7weEBAgggsJQAcV9KTjsEEECgYgLEveLgMG0GAVWRGbCcWhOBrVKXuNcUZbYggAAChQgQ90IgdYMAAgjURIC41xQNtiCAAAKFCBD3QiB1g0DPBLaqC9fHrB9PiXt92cUiBBBAYDUB4r4aoQ4QQACB+ggQ9/piwiIEEEBgNQHivhqhDhBAAIH6CBD3+mLCIgQQQGA1AeK+GuGMDvp5ED/DaacigMAtCDQk7pTxFgliTAQQWEvgNtrVkLivBaw9AgggsD2B20j5w34R9+1jbYRcArVcFbn2Og+BigkQ94qDwzQEEEBgKQHivpScdggggEDFBIj7KDgqAxVnK9OKEZDnxVBW2xFxrzY0DEMAAQSWEyDuy9kdu6Wl37Hjz/vqCSwW99te23uOvudY1ecLA5shIG+bCdVGhi4W943s0S0CCCCAQAECxL0ARF0ggAACtREg7rVFhD0IIIBAAQLEvQBEXSCAAAK1ESDue0bEM649af9nLMxXMgdwJcCbNSfuN0NvYAQQaIpAY/MccW8quxiLAAII5BEg7nmcnIXAPQKNLeJE74AEiPsBg85lBBDonwBx7z/GPEQAgQMSIO6TQXcDPonICQggUB0B4l5dSBiEwH0ClhcyYgkB4r6EmjYIIIBA5QSIe+UBYh4CCCCwhABxX0JNm+4IKH10F9LDO0TcD58CACCAQI8EiHuPUeUTAggcngBxP3wKAIAAAj0SIO49RpVPCCBweAJNi7uHYIfPXwAQQOACgabFXVQRQAABBNIEiLvMQAABBDokQNw7DCqXEEAAAeIuBxBAAIEOCRD3DoPKJQQQQIC4ywEEEECgQwI7i3udmxfrtKrDbOMSAgjsRmBncd/NLwMhgAAChyZA3A8dfs4fhoDb08OE+uQocT9cyDmMAAJHIEDcjxBlPiKAwOEIEPfDhZzDCCBwBALE/QhR5iMCCByOAHE/XMg5jAACRyBA3ItE2VaEIhh1ggACxQgQ92IodYQAArUSOOLyi7jXmo3sQgABBFYQqFDcjzjHrohg602Fu/UIsr9SAhWKe6WkmIUAAgg0RGC9uFt5NRTuLUyVAFtQ1ScCawmsF/e1Fmh/mQDdlB0IILCQAHFfCG6XZsR9F8y9DSJteovoMn+I+zJuWiGAAAJVEyDuNw+PddbNQ8AABDokQNw7DCqXEEAAAeIuBxBAAIEOCRD3DoNaq0sKULVGhl09EiDuPUaVTwggcHgCxP3wKQAAAgj0SIC49xhVPiGAwOEJEPfDpwAACCDQIwHi3mNU+YQAAocnQNwPnwIAIIBAjwSIe49R5RMCCByeAHE/fAoAgAACPRIg7j1GlU8IIHB4AscU94KvShbs6vDJWC8AUa43Nr1btjz3jinuvecD/xBA4PAEiPtBUmD5/H8QQNxEoDMCxL2zgHIHAQQQCALEXR4ggAACHRIg7h0GlUsIIIAAcZcDmQRU7TNBOQ2BKggQ9yrCMNMIOpsJDKhMUE7rkABx7zCoXEIAAQSIuxxAAAEEOiRA3DsMKpcQQAAB4i4HEEAAgQ4JEPcOg8olBLIJeOacjaq1E4l7axFjb0UEKGNFwWDKiABxlxIIIIBAhwSI+/+CahXWYX5zCYHDEiDuhw09xxFAoGcCxL3n6O7i263ueG417i5QDYLAagLEfTVCHSCAAAJBoK4Fx78BxoTPMS1t1XsAAAAASUVORK5CYII="
                         alt="avatar">
                    <div class="relative xl:bg-yellow-100 rounded-xl px-4 py-8 xl:left-10">
                        <h3 id="{{$offer->partner->translation->where('locale',app()->getLocale())->first()->slug}}" role="heading" aria-level="3" class="underline font-medium text-xl xl:text-2xl mb-2">
                            <a class="text-green-700 hover:text-orange-500" href="/{{app()->getLocale()}}/entreprise/partner/{{$offer->partner->translation->where('locale',app()->getLocale())->first()->slug}}">
                                {{$offer->partner->translation->where('locale',app()->getLocale())->first()->name}}
                            </a>
                        </h3>
                        <div>
                            <p class="xl:text-lg">{{$offer->partner->translation->where('locale',app()->getLocale())->first()->adresse}},</p>
                            <p class="mb-4 xl:text-lg">{{$offer->partner->translation->where('locale',app()->getLocale())->first()->locality_number}} {{$offer->partner->translation->where('locale',app()->getLocale())->first()->locality}}</p>
                        </div>
                        <a class="hover:text-orange-500 underline text-green-700 text-lg xl:text-xl" href="mailto:{{$offer->partner->translation->where('locale',app()->getLocale())->first()->mail}}">{{$offer->partner->translation->where('locale',app()->getLocale())->first()->mail}}</a>
                        <div class="flex justify-between gap-24 xl:gap-32 items-center mt-4 ">
                            <div class="flex flex-1 gap-3">
                                <div class="relative group">
                                    <svg class="group-hover:scale-110" width="34" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" fill="#da953a"><path d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z"/></svg>
                                    <a class="linkcard" href="{{$offer->partner->translation->where('locale',app()->getLocale())->first()->link_facebook}}"></a>
                                </div>
                                <div class="group relative">
                                    <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                         viewBox="0 0 41.079 41.079">
                                        <path id="af2da8f3726c5aa836b9ea2eeab70e0c"
                                              d="M33.508,9.107h0a2.465,2.465,0,1,0,2.465,2.465A2.465,2.465,0,0,0,33.508,9.107Zm9.448,4.971a15.589,15.589,0,0,0-.945-4.991,10.146,10.146,0,0,0-2.383-3.635,9.654,9.654,0,0,0-3.636-2.362A14.994,14.994,0,0,0,31,2.123C28.825,2,28.126,2,22.54,2s-6.285,0-8.462.123a14.994,14.994,0,0,0-4.991.965A9.818,9.818,0,0,0,5.451,5.451,9.654,9.654,0,0,0,3.089,9.086a14.994,14.994,0,0,0-.965,4.991C2,16.254,2,16.953,2,22.54S2,28.825,2.123,31a14.994,14.994,0,0,0,.965,4.991,9.654,9.654,0,0,0,2.362,3.635A9.818,9.818,0,0,0,9.086,41.99a14.994,14.994,0,0,0,4.991.965c2.177.123,2.876.123,8.462.123s6.285,0,8.462-.123a14.994,14.994,0,0,0,4.991-.965,9.654,9.654,0,0,0,3.636-2.362,9.962,9.962,0,0,0,2.383-3.635A15.59,15.59,0,0,0,42.956,31c0-2.177.123-2.876.123-8.462S43.079,16.254,42.956,14.077Zm-3.7,16.678a11.523,11.523,0,0,1-.7,3.82,6.285,6.285,0,0,1-1.54,2.362,6.552,6.552,0,0,1-2.362,1.54,11.523,11.523,0,0,1-3.82.7c-2.054.1-2.814.123-8.216.123s-6.162,0-8.216-.123a11.769,11.769,0,0,1-3.985-.616,6.716,6.716,0,0,1-2.259-1.54,6.162,6.162,0,0,1-1.52-2.362,11.379,11.379,0,0,1-.822-3.9c0-2.054-.123-2.814-.123-8.216s0-6.162.123-8.216a11.379,11.379,0,0,1,.719-3.9A6.162,6.162,0,0,1,8.162,8.162a6.449,6.449,0,0,1,2.259-1.643,11.769,11.769,0,0,1,3.9-.7c2.054,0,2.814-.123,8.216-.123s6.162,0,8.216.123a11.523,11.523,0,0,1,3.82.7A6.285,6.285,0,0,1,37.02,8.162a6.285,6.285,0,0,1,1.54,2.259,11.523,11.523,0,0,1,.7,3.9c.1,2.054.123,2.814.123,8.216S39.361,28.7,39.259,30.755ZM22.54,12a10.516,10.516,0,1,0,7.47,3.073A10.537,10.537,0,0,0,22.54,12Zm0,17.376a6.84,6.84,0,1,1,6.84-6.84,6.84,6.84,0,0,1-6.84,6.84Z"
                                              transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>
                                    <a class="linkcard" href="{{$offer->partner->translation->where('locale',app()->getLocale())->first()->link_instagram}}"></a>
                                </div>
                                <div class="group relative">
                                    <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                         viewBox="0 0 37.777 38.005">
                                        <path id="e42de672acac05e6c1484ce6eac8627f"
                                              d="M37.044,2H4.853A2.755,2.755,0,0,0,2.06,4.717v32.57A2.755,2.755,0,0,0,4.853,40h32.19a2.755,2.755,0,0,0,2.793-2.717V4.717A2.755,2.755,0,0,0,37.044,2ZM13.518,33.81h-5.7v-17.1h5.7Zm-2.85-19.5h0a2.964,2.964,0,1,1,0-5.929,2.983,2.983,0,1,1,0,5.929Zm23.411,19.5h-5.7V24.632c0-2.3-.817-3.8-2.888-3.8A3.135,3.135,0,0,0,22.564,22.9a3.8,3.8,0,0,0-.19,1.387v9.5h-5.7v-17.1h5.7V19.1a5.7,5.7,0,0,1,5.15-2.85c3.8,0,6.556,2.451,6.556,7.715Z"
                                              transform="translate(-2.06 -2)" fill="#da953a"/>
                                    </svg>
                                    <a class="linkcard" href="{{$offer->partner->translation->where('locale',app()->getLocale())->first()->link_linkedin}}"></a>
                                </div>

                            </div>
                            <p class="justify-self-end text-green-500 uppercase xl:text-lg">Partenaire</p>
                        </div>
                    </div>
                </article>
                <div class="flex flex-col xl:gap-10 mb-12 xl:mb-0">
                    <a href="{{$offer->partner->translation->where('locale',app()->getLocale())->first()->site_link}}"
                       class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl">{{__('agency.partner_view_site')}}</a>
                    <a class="group hover:text-orange-500 self-center flex font-sans text-end text-green-700 xl:text-2xl font-semibold underline self-end"
                       href="{{$offer_ref->pdf}}">{{__('agency.offer_pdf')}}
                    </a>
                </div>
            </div>
            <div class="xl:ml-20 flex flex-col gap-16">
                <div>
                    <p class="font-sans text-xl xl:text-2xl font-medium mb-5">{{__('agency.offer_description')}}</p>
                    <p class="text-lg leading-8 xl:max-w-[75%]">
                        {{$offer_ref->description}}
                    </p>
                </div>
                <section aria-labelledby="needed">
                    <h3 id="needed" role="heading" aria-level="3"
                        class="font-sans text-xl xl:text-2xl font-medium mb-5">{{__('agency.offer_aptitude')}}</h3>
                    <div class="flex flex-col lg:flex-row gap-12 xl:gap-32">
                        <section class="border-b-2 border-b-orange-500/40 pb-12 md:border-b-0 md:pb-0 lg:pr-12 xl:pr-24 md:border-r-orange-500/40 lg:border-r-2" aria-labelledby="languages">
                            <h4 id="languages" role="heading" aria-level="4"
                                class="text-green-500 mb-4 text-lg xl:text-xl">{{__('contact_page.agency_language')}}</h4>
                            <ul class="flex flex-col gap-2 list-disc">
                                @foreach($offer->language as $language)
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7">
                                            <circle data-name="Ellipse 50" cx="3.5" cy="3.5" r="3.5"
                                                    fill="#6f704d"/>
                                        </svg>
                                        <p>{{ucwords($language->translation->where('locale',app()->getLocale())->first()->name)}}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                        <div class="flex flex-col xl:gap-12">
                            <section class="border-b-2 border-b-orange-500/40 pb-12 md:border-b-0 xl:pb-0 " aria-labelledby="software">
                                <h4 id="software" role="heading" aria-level="4"
                                    class="text-xl text-green-500 mb-4">{{__('agency.offer_software')}}</h4>
                                <ul class="flex flex-col gap-2 list-disc">
                                    @foreach($offer->software as $software)
                                        <li class="flex items-center gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7"
                                                 viewBox="0 0 7 7">
                                                <circle data-name="Ellipse 50" cx="3.5" cy="3.5" r="3.5"
                                                        fill="#6f704d"/>
                                            </svg>
                                            <p>{{ucwords($software->translation->where('locale',app()->getLocale())->first()->name)}}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <article class="bg-yellow-600 2xl:px-48 xl:px-32 px-10 pb-24 pt-20" aria-labelledby="internships">
        <div class="flex md:flex-row flex-col justify-between mb-8">
            <h2 id="internships" role="heading" aria-level="2" class="xl:text-4xl md:text-3xl text-2xl uppercase font-extrabold font-sans mb-4 xl:mb-20">{{__('agency.offer_other_title')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/entreprise/internship">{{__('agency.offer_other')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($offers as $other_offer)
                <article class="group hover:bg-orange-100 relative flex flex-col bg-white-100 py-4 px-4 xl:py-6 xl:px-8 rounded-3xl"
                         aria-labelledby="{{$other_offer->translation->where('locale',app()->getLocale())->first()->slug}}">
                    <div class="flex flex-1 items-center">
                        <div class="flex-1 order-2 ml-4">
                            <div class="md:flex-row flex-col flex justify-between">
                                <h3 id="{{$other_offer->translation->where('locale',app()->getLocale())->first()->slug}}" role="heading" aria-level="3" class="text-lg md:text-xl xl:text-2xl">{{$other_offer->translation->where('locale',app()->getLocale())->first()->name}}</h3>
                                <p class="xl:text-lg">{{$other_offer->translation->where('locale',app()->getLocale())->first()->created_at->format('d M. Y')}}</p>
                            </div>
                            <div class="mt-1 flex justify-between">
                                <div class="flex flex-col gap-2 max-w-[80%]">
                                    <p class="text">{{$other_offer->translation->where('locale',app()->getLocale())->first()->description}}</p>
                                    <p class="font-medium xl:text-lg">{{$other_offer->partner->translation->where('locale',app()->getLocale())->first()->name}}</p>
                                </div>
                                <svg class="self-end mr-4 group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
                                     width="25"
                                     viewBox="0 0 32 27.417">
                                    <path id="e6c07a72bd494f72e4a4d962e39f725c"
                                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                       href="/{{app()->getLocale()}}/entreprise/internship/{{$other_offer->translation->where('locale',app()->getLocale())->first()->slug}}">{{__('En savoir plus' . $other_offer->translation->where('locale',app()->getLocale())->first()->slug)}}</a>
                </article>
            @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
