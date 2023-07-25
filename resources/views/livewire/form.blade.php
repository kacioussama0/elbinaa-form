<div>

    @if($is_end)
        <div class="alert alert-danger">
            <h3 class="display-1 text-center">التسجيلات إنتهت</h3>
        </div>
    @else

    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="last_name" class="form-label">اللقب</label>
                <input type="text" id="last_name"   class="form-control" wire:model="last_name">
                @error('last_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="first_name" class="form-label">الإسم</label>
                <input type="text" class="form-control" id="first_name" wire:model="first_name">
                @error('first_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="dob" class="form-label">تاريخ الميلاد</label>
                <input type="date" class="form-control" id="dob" wire:model="dob">
                @error('dob')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="state" class="form-label">الولاية</label>

                <select name="state" id="state" class="form-select" wire:model="state">
                    @foreach($cities as $city)
                        <option value="{{$city->wilaya_name}}" >{{$city->wilaya_code}} - {{$city->wilaya_name}}</option>
                    @endforeach
                </select>
                @error('state')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="email" class="form-control" id="email" wire:model="email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="phone" class="form-label">رقم الواتساب</label>
                <input type="tel" class="form-control" id="phone" wire:model="phone">
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="level" class="form-label">المستوى الدراسي</label>
                <select name="level" id="level" class="form-control" wire:model="level">
                    <option value=""  disabled>قم باختيار المستوى</option>
                    <option value="ثانوي">ثانوي</option>
                    <option value="جامعي">جامعي</option>
                    <option value="تكوين مهني">تكوين مهني</option>
                </select>
                @error('level')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="job" class="form-label">المهنة</label>
                <select name="job" id="job" class="form-control" wire:model="job">
                    <option value=""  disabled>قم باختيار المهنة</option>
                    <option value="عامل">عامل</option>
                    <option value="عمل حر">عمل حر</option>
                    <option value="عاطل">عاطل</option>
                </select>
                @error('job')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="url" class="form-label">رابط للأعمال الإعلامية</label>
                <input type="url" class="form-control" id="url" wire:model="url">
                @error('url')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="mb-3 col-md-6">
                <label for="course" class="form-label">الورشات</label>
                <select name="course" id="course" class="form-control" wire:model="course">
                <option value="" selected>قم باختيار الورشة</option>
                @foreach($courses as $course)
                        <option value="{{$course->id}}"  @if($places - count($course->forms) <= 0 ) disabled @endif>{{$course->title}}  ({{$places - count($course->forms)}} مقاعد متبقية)</option>
                    @endforeach
                </select>
                @error('course')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mt-3 col-md-12">
                <button class="btn btn-lg w-100 btn-dark">إرسال</button>
            </div>
        </div>

        @if (session()->has('success'))
            <script>
                Swal.fire({
                    title: 'تهانينا',
                    text: 'لقد تم تسجيلك بنجاح سوف نتصل بك في أقرب الأجال',
                    icon: 'success',
                    confirmButtonText: 'تم'
                })
            </script>
        @endif


    </form>

    @endif

</div>
