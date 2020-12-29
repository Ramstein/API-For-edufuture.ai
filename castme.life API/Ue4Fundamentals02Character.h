 //#########################################
#include "Engine/DataTable.h" // included Datatable.h that are the struct

USTRUCT(BlueprintType)
struct FPlayerAttackMontage : public FTableRowBase
{
	GENERATED_BODY()

	/** Melee Fist Attack Montage **/
	UPROPERTY(EditAnywhere, BlueprintReadOnly)
		UAnimMontage* Montage;

	/** amount of start sections within our montage **/
	UPROPERTY(EditAnywhere, BlueprintReadOnly)
		int32 AnimSectionCount;

	UPROPERTY(EditAnywhere, BlueprintReadOnly)
		FString Description;
};


UCLASS(config=Game)
class AUE4Fundamentals02Character : public ACharacter
{
	GENERATED_BODY()

	/** melee attack data table *#############################*/
	UPROPERTY(EditDefaultsOnly, BlueprintReadOnly, Category = Animation, meta = (AllowPrivateAccess = "true"))  // doesn't matter the Animation category to show it up
	class UDataTable* PlayerAttackDataTable;
};




#include "Engine/DataTable.h" // included Datatable.h that are the struct


// creating all the datatable structs
// #########################################

USTRUCT(BlueprintType)
struct UserInfo : public FTableRowBase
{
	GENERATED_BODY()

	UPROPERTY(EditAnywhere, BlueprintReadOnly)
		FString UserLogin;
	UPROPERTY(EditAnywhere, BlueprintReadOnly)
		FString UserPass;
	UPROPERTY(EditAnywhere, BlueprintReadOnly)
		FString UserEmail;
	UPROPERTY(EditAnywhere, BlueprintReadOnly)
		FString DisplayName;
};


UCLASS(config = Game)
class PUZZLEPLATFORMS_API UMainMenu : public UMenuWidget
{
	GENERATED_BODY()

	/** UserInfo data table *#############################*/
	UPROPERTY(EditDefaultsOnly, BlueprintReadOnly, Category = Animation, meta = (AllowPrivateAccess = "true"))  // doesn't matter the Animation category to show it up
	class UDataTable* UserInfoDataTable;
};