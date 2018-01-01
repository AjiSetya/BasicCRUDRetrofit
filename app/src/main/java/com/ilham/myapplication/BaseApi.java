package com.ilham.myapplication;

import com.ilham.myapplication.Model.MMobil;
import com.ilham.myapplication.Model.MMotor;

import retrofit2.Call;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

/**
 * Created by AJISETYA on 12/29/2017.
 */

public interface BaseApi {

    class BaseApiUtama {
        public static BaseApi buat() {
            Retrofit retrofit = new Retrofit.Builder()
                    .baseUrl("http://192.168.100.9/PenyewaanJumbo/")
                    .addConverterFactory(GsonConverterFactory.create())
                    .build();

            return retrofit.create(BaseApi.class);
        }
    }

    @FormUrlEncoded
    @POST("simpanmotor.php")
    Call<MMotor> insertDataMotor(
            @Field("txtid") String id
            ,@Field("txtnama") String nama
            , @Field("txtalamat") String alamat
            , @Field("txtmerk") String merk
            , @Field("txttglpeminjaman") String tglPeminjaman
            , @Field("txttglpengembalian") String tglPengembalian
    );

    @FormUrlEncoded
    @POST("updatemotor.php")
    Call<MMotor> updateDataMotor(
            @Field("txtid") String id
            ,@Field("txtnama") String nama
            , @Field("txtalamat") String alamat
            , @Field("txtmerk") String merk
            , @Field("txttglpeminjaman") String tglPeminjaman
            , @Field("txttglpengembalian") String tglPengembalian
    );

    @FormUrlEncoded
    @POST("simpanmobil.php")
    Call<MMobil> insertDataMobil(
            @Field("txtid") String id
            ,@Field("txtnama") String nama
            , @Field("txtalamat") String alamat
            , @Field("txtmerk") String merk
            , @Field("txttglpeminjaman") String tglPeminjaman
            , @Field("txttglpengembalian") String tglPengembalian
    );

    @FormUrlEncoded
    @POST("updatemobil.php")
    Call<MMobil> updateDataMobil(
            @Field("txtid") String id
            ,@Field("txtnama") String nama
            , @Field("txtalamat") String alamat
            , @Field("txtmerk") String merk
            , @Field("txttglpeminjaman") String tglPeminjaman
            , @Field("txttglpengembalian") String tglPengembalian
    );
}
