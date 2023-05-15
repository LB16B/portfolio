<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Core as YubinBangoCore } from "yubinbango-core2";

const form = useForm({
    name: '',
    kana: null,
    tel: null,
    email: '',
    password: '',
    password_confirmation: '',
    postcode: null,
    address: null,
    birthday: null,
    gender: null,
    memo: null,
    terms: false,
});

const submit = () => {
    form.post(route('paid_member.register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

// 数字を文字に変換 第１引数が郵便番号
// 第２がコールバックで引数に住所
const fetchAddress = () => {
    new YubinBangoCore(String(form.postcode), (value) => {
    form.address = value.region + value.locality + value.street
    })
}


</script>

<template>
    <GuestLayout>
        <Head title="有料会員登録" />

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="氏名" />
                <TextInput type="text" id="name" name="name" v-model="form.name" required autocomplete="name" class="mt-1 block w-full" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="kana" value="氏名カナ" />
                <TextInput type="text" id="kana" name="kana" v-model="form.kana" required class="mt-1 block w-full" />
                <!-- <InputError class="mt-2" :message="form.errors.kana" /> -->
            </div>

            <div>
                <InputLabel for="tel" value="電話番号" />
                <TextInput type="tel" id="tel" name="tel" v-model="form.tel" required class="mt-1 block w-full" />
                <!-- <InputError class="mt-2" :message="form.errors.tel" /> -->
            </div>


            <div class="mt-4">
                <InputLabel for="email" value="メールアドレス" />
                <TextInput id="email"
                    type="email" autocomplete="username" v-model="form.email" required class="mt-1 block w-full"/>
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="パスワード" />
                <TextInput id="password" type="password" v-model="form.password" required autocomplete="new-password" class="mt-1 block w-full"/>

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="パスワード確認" />
                <TextInput id="password_confirmation" type="password" v-model="form.password_confirmation" required autocomplete="new-password" class="mt-1 block w-full"/>
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div>
                <InputLabel for="postcode" value="郵便番号" />
                <TextInput @change="fetchAddress" type="number" id="postcode" name="postcode" v-model="form.postcode" required class="mt-1 block w-full" />
                <!-- <InputError class="mt-2" :message="form.errors.tel" /> -->
            </div>

            <div>
                <InputLabel for="address" value="住所" />
                <TextInput type="text" id="address" name="address" v-model="form.address" required class="mt-1 block w-full" />
                <!-- <InputError class="mt-2" :message="form.errors.tel" /> -->
            </div>

            <div>
                <InputLabel for="birthday" value="誕生日" />
                <TextInput type="date" id="birthday" name="birthday" v-model="form.birthday" required class="mt-1 block w-full" />
                <!-- <InputError class="mt-2" :message="form.errors.tel" /> -->
            </div>

            <div>
                <!-- <InputLabel for="birthday" value="誕生日" />
                <TextInput type="date" id="birthday" name="birthday" v-model="form.birthday" required class="mt-1 block w-full" /> -->
                <!-- <InputError class="mt-2" :message="form.errors.tel" /> -->

                <label class="leading-7 text-sm text-gray-600">性別</label>
                <input type="radio" id="gender0" name="gender" v-model="form.gender" value="0" >
                <label for="gender0" class="ml-2 mr-4">男性</label>
                <input type="radio" id="gender1" name="gender" v-model="form.gender" value="1" >
                <label for="gender1" class="ml-2 mr-4">女性</label>
                <input type="radio" id="gender2" name="gender" v-model="form.gender" value="2" >
                <label for="gender2" class="ml-2 mr-4">その他</label>
            </div>

            <div>
                <InputLabel for="text" value="file_path" />
                <TextInput type="text" id="file_path" name="file_path" v-model="form.file_path" class="mt-1 block w-full" />
                <!-- <InputError class="mt-2" :message="form.errors.tel" /> -->
            </div>



            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('paid_member.login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
